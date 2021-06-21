<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\psikolog;
use App\Models\kategori;

class KategoriController extends Controller
{
    //
    public function index(){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $KATEGORI=kategori::paginate(5);
        return view ('layouts/kategori',compact('USER'),['KATEGORI'=>$KATEGORI]);
    }

    public function create(){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        return view ('layouts/kategoripsikolog',compact('USER'));
    }

    public function store(){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $Kategori = kategori::create([
            'nama_kategori' => Request()->nama,
            // 'id' => $id,
        ]);
    
    return redirect()->route('layouts/kategori');
    }
    
    public function delete($id){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $Kategori=kategori::where('id','=',$id)->delete();

        return redirect()->route('layouts/kategori')
                         ->with('success', 'Kategori berhasil dihapus');
    }
}
