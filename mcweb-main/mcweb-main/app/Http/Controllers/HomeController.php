<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\psikolog;
use App\Models\jadwal;
use App\Models\Pasien;
use App\Models\Article;


class HomeController extends Controller
{
    //
    public function index(){
        if(auth()->user()->role == 'user'){
            return view('welcome');
        }else{
            $psikolog = psikolog::all();
            $jadwal = jadwal::all();
            $pasien = Pasien::all();
            $article = Article::all();
            return view('admin.dashboard', compact('psikolog','jadwal','pasien','article'));
        }

    }
}
