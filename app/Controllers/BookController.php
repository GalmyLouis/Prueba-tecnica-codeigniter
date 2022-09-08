<?php

namespace App\Controllers;
use App\Models\Book;
use App\Models\Author;
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
        $author = new Author();
        $query=  $author->author_list();

        $data=
        [
            "data" =>$query
        ];

        $data['header']=view('templates/header');
        $data['footer']=view('templates/footer');

        return view('books/books_create',$data);

    }
    public function save()
    {
        $book = new book();

        $data=[
          
            'book_name'=> $this->request->getVar('name'),
            'edition'=> $this->request->getVar('edition'),
            'authors_id'=>$this->request->getVar('author_id')
        ];
        // print_r($_POST['author_id']);
        print_r($data);
        // $author->insert($data);

        // echo("Datos ingresado correctamente");
    }
    
}
