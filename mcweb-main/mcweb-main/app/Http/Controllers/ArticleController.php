<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $articlead = Article::orderBy('id','asc')->paginate(5);
        return view('layouts.adminarticle',compact('articlead'))
                ->with('i',(request()->input('page',1) -1)*5);
        
        
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.articleadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        {
            if (isset($request->gambar)){
                $extention = $request->gambar->extension();
                $image_name = time().'.'.$extention;
                $request->gambar->move(public_path('img/article'),$image_name);
    
            }else{
                $image_name = null;
            }
    
            $Article = Article::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar'=> $image_name
            ]);
    
    
    
            return redirect()->route('articlead.index')
                             ->with('success','Data berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articlead = article::find($id);
        return view('layouts.articledetail', compact('articlead'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = article::find($id);

        return view('layouts.articleedit', compact('article'));
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

        if (isset($request->gambar)){
            $extention = $request->gambar->extension();
            $image_name = time().'.'.$extention;
            $request->gambar->move(public_path('img\avatar'),$image_name);
            
        }else{
            $image_name = null;
        }

        $article = article::find($id);
        $article->isi = $request->get('isi');
        $article->judul = $request->get('judul');
        $article->gambar = $image_name;
        $article->save();

        return redirect()->route('articlead.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = article::find($id);
        $article->delete();

        return redirect()->route('articlead.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
