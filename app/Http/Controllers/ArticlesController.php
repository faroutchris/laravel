<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    /**
     * Show all articles, sorted by published_at 
     * 
     * @return Response
     */
    public function index () 
    {
        $articles = (
            Article::latest('published_at')
            ->where( 'published_at', '<=', Carbon::now() )
            ->get()
        );
        
        return view('articles.index')->with('articles', $articles);
    }
    
    /**
     * Show a single article
     * 
     * @param integer $id
     * @return Response
     */
    public function show ($id)
    {
        $article = Article::findOrFail($id);
        
        return view('articles.show')->with('article', $article);
    }
    
    /**
     * Show page to create article 
     * 
     * @return Response
     */
    public function create ()
    {
        return view('articles.create');
    }
    
    
    /**
     * Show all articles, sorted by published_at 
     * 
     * @param ArticleRequest $request (validates request params before triggering function body)
     * @return Response
     */
    public function store (ArticleRequest $request) 
    {
        Article::create( $request->all() );
        
        return redirect('/articles');
    }
    
    /**
     * Show page to edit article 
     * 
     * @param integer $id
     * @return Response
     */
    public function edit ($id) 
    {
        $article = Article::findOrFail($id);
        
        return view('articles.edit')->with('article', $article);
    }
    
    /**
     * Update article by id 
     * 
     * @param integer $id
     * @param ArticleRequest $request (validates request params before triggering function body)
     * @return Response
     */
    public function update ($id, ArticleRequest $request) 
    {
        $article = Article::findOrFail($id);
        
        $article->update( $request->all() );
        
        return redirect('/articles');
    }
}
