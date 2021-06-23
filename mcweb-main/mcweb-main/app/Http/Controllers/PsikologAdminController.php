<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\psikolog;
use App\Models\jadwal;
use App\Models\kategori;

class PsikologAdminController extends Controller
{
    //
    public function index(){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $PSIKOLOG=psikolog::paginate(5);
        return view ('admin.psikolog.psikolog',compact('USER'),['PSIKOLOG'=>$PSIKOLOG]);
    }

    public function detail($id){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $PSIKOLOG=psikolog::where('id','=',$id)->first();
        $Jadwal=Jadwal::where('psikolog_id','=',$id)->get();
        return view ('admin.psikolog.psikolog-view',compact('USER','PSIKOLOG'),['Jadwal'=>$Jadwal]);
    }

    public function create(){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        return view ('admin.psikolog.psikolog-form-create',compact('USER'));
    }

    public function store(){
        $ID=Auth::user()->id;
        $USER=User::where('id','=',$ID)->first();
        $file = Request()->foto_psikolog;
        $fileName = Request()->nama . '.' .$file->extension();
        $file->move(public_path('img/foto_psikolog'), $fileName);
        $psikolog = psikolog::create([
            'username' => Request()->username,
            'password' => Request()->password,
            'nama_psikolog' => Request()->nama,
            'email' => Request()->email,
            'no_telp' => Request()->no_telp,
            'alamat' => Request()->alamat,
            'biaya_konsultasi' => Request()->biaya,
            'no_rekening' => Request()->no_rek,
            'tipe_bank' => Request()->tipe_bank,
            'kategori_id' => Request()->kategori,
            'foto_psikolog' => $fileName
        ]);
        echo Request()->username;
        return redirect()->route('admin.psikolog.psikolog')->with('pesan', 'Data psikolog Berhasil Ditambahkan');
        }

        public function edit($id){
            $ID=Auth::user()->id;
            $USER=User::where('id','=',$ID)->first();
            $PSIKOLOG=psikolog::where('id','=',$id)->first();
            $KATEGORI=Kategori::all();
            return view('admin.psikolog.psikolog-form-edit',compact('USER','PSIKOLOG'),['KATEGORI'=>$KATEGORI]);
        }

        public function update($id){
            $ID=Auth::user()->id;
            $USER=User::where('id','=',$ID)->first();
            Request()->validate([
                'foto_psikolog' => 'required|mimes:jpg,png',
            ],[
                'foto_psikolog.required' => 'foto pembayaran harus di isi!',
                'foto_psikolog.mimes' => 'foto pembayaran harus format jpg atau png!',
                'foto_psikolog.max' => 'ukuran tidak boleh lebih dari 5mb!',
    
            ]);
            $file = Request()->foto_psikolog;
            $fileName = Request()->nama . '.' .$file->extension();
            $file->move(public_path('img/foto_psikolog'), $fileName);
            $PSIKOLOG=psikolog::where('id','=',$id)->update([
                'username' => Request()->username,
                'password' => Request()->password,
                'nama_psikolog' => Request()->nama,
                'email' => Request()->email,
                'no_telp' => Request()->no_telp,
                'alamat' => Request()->alamat,
                'biaya_konsultasi' => Request()->biaya,
                'no_rekening' => Request()->no_rek,
                'tipe_bank' => Request()->tipe_bank,
                'kategori_id' => Request()->kategori,
                'foto_psikolog' => $fileName
            ]);
            echo Request()->username;
            return redirect()->route('admin.psikolog.psikolog');
        }

        public function delete($id){
            $ID=Auth::user()->id;
            $USER=User::where('id','=',$ID)->first();
            $psikolog=psikolog::where('id','=',$id)->delete();
            return redirect()->route('admin.psikolog.psikolog')
                             ->with('success', 'psikolog berhasil dihapus');
        }
    }

