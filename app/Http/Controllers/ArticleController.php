<?php

namespace App\Http\Controllers;
/* Mandamos a llamar el modelo category */
use App\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    //
    /* vamos a obtener todas las categorua de nuestra base de datos ELOQUEN ORM
        Select * from categories  */
    public function index(){

        $articles = Article::all();
        return view('articles.index',[
        'articles'=> $articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Article::create([
            'title'=>$request->title,
            'img'=>$request->img,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'category_id'=>$request->category_id,
            'img_id'=>$request->img_id
        ]);
        return redirect('/article')->with('message', 'El articulo se ha agregado exitosamente!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete(Article $article){
        $article->delete();
        return redirect('/article')->with('alert', 'El articulo se ha eliminado exitosamente!');
    }
}