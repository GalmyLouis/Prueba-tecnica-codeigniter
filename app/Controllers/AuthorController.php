<?php

namespace App\Controllers;
use App\Models\Author;
use App\Controllers\BaseController;

class AuthorController extends BaseController
{
    public function index()
    {
       
        $author = new Author();

        // $data['authors'] =  $author->orderBy('id','ASC')->findAll();
        $query=  $author->author_list();

        $data=
        [
            "data" =>$query
        ];
    
        $data['header']=view('templates/header');
        $data['footer']=view('templates/footer');
        return view('authors/author_list',$data);
    }
    
    public function create()
    {
        $data['header']=view('templates/header');
        $data['footer']=view('templates/footer');

        return view('authors/author_create',$data);
    }


    public function save()
    {
        $author = new Author();
        $data=[
          
            'author_fst_name'=> $this->request->getVar('fst_name'),
            'author_lst_name'=> $this->request->getVar('lst_name'),
            'country'=>$this->request->getVar('country')
        ];
        print_r($data);
        $author->insert($data);

        echo("Datos ingresado correctamente");
    }
    
}
