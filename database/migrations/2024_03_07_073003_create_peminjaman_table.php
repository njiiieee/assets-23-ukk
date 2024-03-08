<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_user");
            $table->unsignedBigInteger("id_book");
            $table->enum("status", ["Y", "N"]);
            $table->date("tanggal");
            $table->timestamps();
        });

        // Decrease
        DB::unprepared('
            CREATE TRIGGER TR_decrease_book_stock_AI
            AFTER INSERT
            ON `peminjaman` FOR EACH ROW
            BEGIN
                UPDATE books SET stock = books.stock - 1
                    WHERE books.id = NEW.id_book;
            END
        ');

        // Increase
        DB::unprepared('
            CREATE TRIGGER TR_increase_book_stock_AU
            AFTER UPDATE
            ON `peminjaman` FOR EACH ROW
            BEGIN
                UPDATE books SET stock = books.stock + 1
                WHERE books.id = OLD.id;
            END
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjamen');
    }
};
