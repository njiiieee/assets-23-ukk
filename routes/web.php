<?php

use App\Models\Book;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// metode nya get lalu masukkan namespace AuthController
// attribute name merupakan penamaan dari route yang kita buat
// kita tinggal panggil fungsi route(name) pada layout atau controller

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['loginchecker:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['loginchecker:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::get('/akun-user', function () {
    return view('admin.daftar');
});

Route::get('/search', function () {

    $books = Book::with(["pinjaman"])->orderby('created_at', 'DESC')->get();
    return view('search', compact('books'));
});

Route::get('/pinjam', function () {
    $books = Book::all();

    return view('pinjam', compact("books"));
});

Route::post('/pinjam', function(Request $request) {
    $credentials = $request->validate([
        "id_book" => ["required", "numeric"],
        "tanggal" => ["required", "date"],
    ]);
    $credentials["status"] = "N";
    $credentials["id_user"] = auth()->user()->id;
    $book = Book::firstWhere("id", $credentials["id_book"]);

    if ($book->stock <= 0) return redirect("/pinjaman");

    Peminjaman::create($credentials);

    return redirect("/pinjaman");
});

Route::get('/pinjaman', function () {
    $peminjaman = Peminjaman::with(["book"])->where("id_user", auth()->user()->id)->get();

    return view('datapinjam', ["peminjaman" => $peminjaman]);
});

Route::get('/kembali', function () {
    $peminjaman = Peminjaman::with(["user", "book"])->get();

    return view('admin.kembali', compact("peminjaman"));
});

Route::get('/profile-admin', function () {
    return view('admin.profileadmin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [UserController::class, "edit"]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::resource('/koleksi-buku', BookController::class);

Route::put('/koleksi-buku/kembalikan/{peminjaman:id}', [BookController::class, "kembalikan"]);

