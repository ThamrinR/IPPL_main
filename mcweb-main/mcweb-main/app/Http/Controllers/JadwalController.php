<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\psikolog;
use App\Models\jadwal;

class JadwalController extends Controller
{
    //
    public function create($id){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $PSIKOLOG=psikolog::where('id','=',$id)->first();
        return view ('admin.psikolog.psikologjadwaladd',compact('USER','PSIKOLOG'));
    }

    public function store($id){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $Jadwal = jadwal::create([
            'hari' => Request()->hari,
            'jam_mulai' => Request()->jam_mulai,
            'jam_akhir' => Request()->jam_akhir,
            'psikolog_id' => $id,
        ]);
    
    return redirect()->route('psikolog');
    }
    
    public function delete($id){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $HJadwal=jadwal::where('id','=',$id)->delete();

        return redirect()->route('psikolog')
                         ->with('success', 'jadwal berhasil dihapus');
    }
}
