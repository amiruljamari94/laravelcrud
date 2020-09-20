<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->paginate(10);

        return view('articles.index')->with(compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {
        //cara 1 save data
        // $article = new Article;
        // $article->title = request()->title;
        // $article->body = request()->body;
        // $article->save();

        //cara 2 perlukan fillable dlm model

        //dd($request->all()); //debug and die

        //$article = Article::create($request->all());

        $article = Article::create(['title' => $request->post('title'), 'body' => $request->post('body')]);
        return redirect()->route('article:index');


    
    }

    public function edit(Article $article)
    {
        $test = 'Amirul';
        return view('articles.edit')->with(compact('article', 'test'));
    }

    public function update(Article $article)
    {
        $article->update(request()->all());

        return redirect()->route('article:index');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect()->route('article:index');
    }

    public function search()
    {
        
        $articles = Article::where('title', 'LIKE', '%' . request()->keyword . '%')->paginate(10);
        return view ('articles.index')->with(compact('articles'));

    }



}
