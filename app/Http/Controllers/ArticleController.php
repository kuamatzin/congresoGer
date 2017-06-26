<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function home()
    {
        $articulos = Article::all();
        return view('welcome', compact('articulos'));
    }

    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request['fecha'] = Carbon::createFromDate(2017, $request->fecha, 1, 'America/Mexico_City');
        $request['imagen'] = $request->file('imagen')->store('articleImages');

         
         Article::create($request->all());

         return redirect('articulos');
    }

    public function edit($article)
    {
        $article = Article::find($article);
        
        return view('articles.edit', compact('article'));
    }

    public function update($article, Request $request)
    {
        $datos = $request->all();
        $datos['fecha'] = Carbon::createFromDate(2017, $datos['fecha'], 1, 'America/Mexico_City');
        $path = $request->file('imagen')->store('articleImages', 'uploads');
        $datos['imagen'] = $path;
        $article = Article::find($article);
        $article->update($datos);

         return redirect('articulos');
    }
}
