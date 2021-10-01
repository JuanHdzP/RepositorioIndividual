<?php

namespace App\Http\Controllers;
/* Mandamos a llamar el modelo category */
use App\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    /* vamos a obtener todas las categorua de nuestra base de datos ELOQUEN ORM
        Select * from categories  */
    public function index(){

        $articles = Article::all();
        return view('articles.index',[
        'articles'=> $articles
        ]);


    }
    public function store(){


    }
    public function delete(){


    }
}