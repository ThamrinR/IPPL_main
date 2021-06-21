<?php

namespace App\Http\Controllers;
use App\Models\psikolog;
use Illuminate\Http\Request;

class dashController extends Controller
{
    public function index($id){
        $psikolog = psikolog::where('id',$id);
        return view('psikolog', compact('psikolog'));
    }
}
