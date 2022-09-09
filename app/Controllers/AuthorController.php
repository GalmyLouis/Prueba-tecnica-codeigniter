<?php

namespace App\Controllers;
use App\Models\Author;
use App\Models\Book;
use App\Controllers\BaseController;


class AuthorController extends BaseController
{
   


    public function index()
    {
       
        $author = new Author();

        $data =  $author->orderBy('id','ASC')->findAll();
        // $query=  $author->author_list();

        $data=
        [
            "data" =>$data
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
         //validation
        //  $validation= \Config\Services::validation();

        //  $check = $this->validate([
        //     'fst_name'=>'required',
        //     'lst_name'=>'required',
        //     'country'=>'required',
        //     'book_number'=>'required'
 
        //     ]);
 
         
        //     if(!$check)
        //     {
            
        //      return $this->response->redirect(base_url('/author_new'));
        //     }
            
        $data=[
          
            'author_fst_name'=> $this->request->getVar('fst_name'),
            'author_lst_name'=> $this->request->getVar('lst_name'),
            'country'=>$this->request->getVar('country'),
            'book_number'=>$this->request->getVar('book_count')
        ];
        
        
        $author->insert($data);

        return $this->response->redirect(base_url('/author_list'));
    }

    public function edit($id=null)
    {
        // $author = new Author();

        $db      = \Config\Database::connect();
        $builder = $db->table('authors')->getwhere(['id'=> $id]);
        
        $data['author'] =$builder->getRow();
       

        $data['header']=view('templates/header');
        $data['footer']=view('templates/footer');


         return view('authors/author_edit' , $data);
    }

    public function update()
    {
        $author = new Author();

        //validation
        // $validation= \Config\Services::validation();
        // $check=$this->validate([
        //    'fst_name'=>'required',
        //    'lst_name'=>'required',
        //    'country'=>'required',
        //    'book_number'=>'required'

        //    ]);

        
        //    if(!$check)
        //    {
        //     return $this->response->redirect(base_url('/author_new'));
        //    }
        
        $data=[
          
            'author_fst_name'=> $this->request->getVar('fst_name'),
            'author_lst_name'=> $this->request->getVar('lst_name'),
            'country'=>$this->request->getVar('country'),
            'book_number'=>$this->request->getVar('book_count')
        ];
        
        $id=$this->request->getVar('id');

        $author->update($id,$data);

        return $this->response->redirect(base_url('/author_list'));
    }
        
    public function delete($id=null)
    {

        //  print_r("borrar datos".$id);
        $author = new Author();

        $author->delete($id);

         

     return $this->response->redirect(base_url('/author_list'));

    }

    public function details($id=null)
    {
       $db      = \Config\Database::connect();
       $builder = $db->table('authors')->getwhere(['id'=> $id]);
       
       $data['author'] =$builder->getRow();

       $data['header']=view('templates/header');
       $data['footer']=view('templates/footer');

       return view('authors/author_details',$data);
    }
}
