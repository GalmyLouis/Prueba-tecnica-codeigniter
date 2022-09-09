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
        
        // $book = new Book();  //no me funcionaba tuve que usar query builder
        $db      = \Config\Database::connect();
        $builder = $db->table('books');

        $data=[
          
            'book_name'=> $this->request->getPost('name'),
            'edition'=> $this->request->getPost('edition'),
            'authors_id'=>$this->request->getPost('author_id'),
            'publication_date'=>$this->request->getPost('publication_date')
        ];
        // print_r($_POST['author_id']);
         print_r($data);
         $builder->insert($data);
    }
    
}
