<?php

namespace App\Controllers;
use App\Models\Book;
use App\Controllers\BaseController;

class BookController extends BaseController
{
    public function index()
    {
        $book = new book();
        // $data['books'] =  $book->orderBy('id','ASC')->findAll();
        $data=$book->book_list();
        $data=
        [
            "data" =>$data
        ];

        
        $data['header']=view('templates/header');
        $data['footer']=view('templates/footer');

        return view('books/books_list',$data);
    }


    public function create()
    { 
        
        $data['header']=view('templates/header');
        $data['footer']=view('templates/footer');

        return view('books/books_create',$data);

    }
    
}
