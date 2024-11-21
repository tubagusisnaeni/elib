<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Fungsi untuk menampilkan katalog buku
    public function index()
    {
        // Mengambil semua data buku dari database
        $books = Book::all();

        // Return view 'books.index' dengan data buku
        return view('books.index', compact('books'));
    }

    // Fungsi untuk menampilkan detail buku
    public function show($id)
    {
        // Mengambil buku berdasarkan ID
        $book = Book::findOrFail($id);

        // Return view 'books.show' dengan detail buku
        return view('books.show', compact('book'));
    }
}
