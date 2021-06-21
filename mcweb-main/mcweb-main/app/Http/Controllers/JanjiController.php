<?php

namespace App\Http\Controllers;
use App\Models\psikolog;
use App\Models\jadwal;
use App\Models\booking;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JanjiController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $user = User::find(auth()->id());
        $booking = booking::where('user_id','=',$id);
        $campuran = psikolog::select(
        'psikolog.nama_psikolog',
        'booking.jadwal_psikolog',
        'booking.status'     
        )->where('user_id','=',$id)->join('booking','booking.psikolog_id','=','psikolog.id')->get();
        
        return view('profile', compact('user','booking','campuran'));
    }
    public function show($id)
    {
        $psikolog = psikolog::where('id','=', $id)->first();
        $jadwal = jadwal::get();
        // $janji = jadwal::get();
        return view('layouts.buatjanji', compact('psikolog','jadwal'),['jadwal'=> $jadwal]);
    }
    public function store(Request $request)
    {
        if (isset($request->bukti_pembayaran)){
            $extention = $request->bukti_pembayaran->extension();
            $bukti_pembayaran = time().'.'.$extention;
            $request->bukti_pembayaran->move(public_path('img\bukti'),$bukti_pembayaran);
            
        }else{
            $bukti_pembayaran = null;
        }

        $psikolog = booking::create([
            'jadwal_psikolog'=>$request->jadwal_psikolog,
            'biaya_konsultasi'=>'250000',
            'bukti_pembayaran' => $bukti_pembayaran,
            'psikolog_id'=>$request->psikolog_id,
            'user_id'=>$request->user_id,
            
        ]);

        return redirect()->route('buatjanji.index')
                         ->with('success','Data berhasil ditambahkan');
    }
    public function edit($id)
    {
        $nama = Request()->nama_psikilog;
        $jadwal = Request()->jadwal;
        return view('layouts.pembayaran', ['nama' => $nama]);
    }
}