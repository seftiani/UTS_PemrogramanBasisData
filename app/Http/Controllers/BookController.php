<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getBook()
    {
        $books = Book::orderBy('id', 'DESC')->get();
        return view ('books', compact ('books'));
    }

    public function addBook()
    {
        return view ('add-book');
    }

    public function createBook(Request $request)
    {
        $book = new Book();
        $book->judul = $request->judul;
        $book->tahun = $request->tahun;
        $book->stok = $request->stok;
        $book->penulis = $request->penulis;
        $book->genre = $request->genre;
        $book->save();
        return back()->with('success', 'Data Berhasil Ditambah');
    }
}
