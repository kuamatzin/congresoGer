<?php

namespace App\Http\Controllers;

use App\Article;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['home', 'fetch', 'test', 'about', 'dates', 'news', 'publications']);
    }

    public function home()
    {
        return view('welcome');
    }
    public function test()
    {
        return view('test');
    }

    public function about()
    {
        return view('about');
    }

    public function dates()
    {
        return view('dates');
    }

    public function news()
    {
        return view('news');
    }

    public function publications()
    {
        return view('publications');
    }

    public function index()
    {
        $articles = Article::all()->sortByDesc("created_at");
        return view('articles.index', compact('articles'));
    }

    public function fetch()
    {
        return Article::where('tipo', Input::get('tipo'))->orderBy('created_at', 'desc')->paginate(8);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        if (array_key_exists('imagen', $datos)) {
            $datos['imagen'] = $request->file('imagen')->store('articleImages', 'uploads');
        }

        if (array_key_exists('pdf', $datos)) {
            $datos['pdf'] = $request->file('pdf')->store('pdfDocs', 'uploads');
            $datos['url'] = 'uploads/' . $datos['pdf'];
        }
         
        Article::create($datos);

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
        if (array_key_exists('imagen', $datos)) {
            $datos['imagen'] = $request->file('imagen')->store('articleImages', 'uploads');
        }
        $article = Article::find($article);
        $article->update($datos);

        return redirect('articulos');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();

        return "true";
    }
}
