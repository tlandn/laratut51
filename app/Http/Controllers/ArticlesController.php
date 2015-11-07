<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function __construct() {
//        $this->middleware('auth', ['except' => 'index']);
    }



    public function index()
    {
       // return \Auth::user()->name;

        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
//        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
       // $article = Article::findOrFail($id);

        return view('articles.edit', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());
        \Auth::user()->articles()->save($article);

        return redirect('articles');
    }

    public function update(Article $article, ArticleRequest $request)
    {
        //$article = Article::findOrFail($id);

        $article->update($request->all());

        return redirect('articles');
    }

}
