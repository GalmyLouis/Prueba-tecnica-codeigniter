<?php

namespace App\Controllers;
use App\Models\Book;
use App\Controllers\BaseController;

class BookController extends BaseController
{
    public function index()
    {
        $book = new book();
        $data['books'] =  $book->orderBy('id','ASC')->findAll();
        return view('books/books_list',$data);
    }


    public function create()
    {
        return view('books/books_list');
    }
    
}
