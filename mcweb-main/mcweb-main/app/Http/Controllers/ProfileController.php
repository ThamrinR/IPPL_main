<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\psikolog;
use Illuminate\Support\Facades\Auth;
use App\Models\booking;

class ProfileController extends Controller
{
    public function view()
    {
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
        
}
