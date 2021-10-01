<?php

namespace App\Http\Controllers;
/* Mandamos a llamar el modelo category */
use App\image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    /* vamos a obtener todas las categorua de nuestra base de datos ELOQUEN ORM
        Select * from categories  */
    public function index(){

        $images = Image::all();
        return view('images.index',[
        'images'=> $images
        ]);


    }
    public function store(){


    }
    public function delete(){


    }
}