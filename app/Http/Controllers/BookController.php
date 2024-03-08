<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Peminjaman;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use ProtoneMedia\Splade\SpladeTable;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderby('created_at', 'DESC')->get();

        return view('admin.koleksi', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.koleksi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|file|max:2048',
            'author' => 'required',
            'description' => 'required|min:10',
            'year' => 'required|digits:4',
            'genre' => 'required',
            'stock' => 'required',
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Book::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'year' => $request->year,
            'genre' => $request->genre,
            'stock' => $request->stock,
        ]);

        //redirect to index
        return redirect()
            ->route('koleksi-buku.index')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //get post by ID
        $books = Book::findOrFail($id);

        //render view with book
        return view('admin.koleksi', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //get post by ID
        $books = Book::findOrFail($id);

        //render view with post
        return view('admin.koleksi', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //get post by ID
        $books = book::findOrFail($id);

        //validate form
        $this->validate($request, [
            'title' => 'required',
            'image' => 'nullable|image|file|max:2048',
            'author' => 'required',
            'description' => 'required|min:10',
            'year' => 'required|digits:4',
            'genre' => 'required',
            'stock' => 'required',
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {
            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/' . $books->image);

            //update post with new image
            $books->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'author' => $request->author,
                'description' => $request->description,
                'year' => $request->year,
                'genre' => $request->genre,
                'stock' => $request->stock,
            ]);
        } else {
            //update post without image
            $books->update([
                'title' => $request->title,
                'author' => $request->author,
                'description' => $request->description,
                'year' => $request->year,
                'genre' => $request->genre,
                'stock' => $request->stock,
            ]);
        }

        //redirect to index
        return redirect("/koleksi-buku")
            ->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get post by ID
        $books = Book::findOrFail($id);

        //delete image
        Storage::delete('public/posts/' . $books->image);

        //delete post
        $books->delete();

        //redirect to index
        return redirect("/koleksi-buku")
            ->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function kembalikan(Peminjaman $peminjaman) {
        $peminjaman->update(["status" => "Y"]);

        return redirect('/kembali');
    }
}
