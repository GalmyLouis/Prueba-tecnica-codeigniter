<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('books/books_list');
    }
}
