<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticlehomeController extends Controller
{
    public function index()
    {
        
        $article = Article::orderBy('id','asc')->paginate(5);
        return view('article',compact('article'))
                ->with('i',(request()->input('page',1) -1)*5);
        
   }

   public function show($id)
   {
       $article = Article::find($id);
       return view('articledetail', compact('article'));
   }

}