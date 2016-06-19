<?php

namespace App\Http\Controllers;

use App\Article;
use Request;
use App\Http\Requests;
use Carbon\Carbon;

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
     * @return Response
     */
    public function store () 
    {
        Article::create( Request::all() );
        
        return redirect('/articles');
    }
}
