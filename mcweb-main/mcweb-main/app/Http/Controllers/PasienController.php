<?php

namespace App\Http\Controllers;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        
        $pasienad = Pasien::orderBy('id','asc')->paginate(5);
        return view('layouts.pasien',compact('pasienad'))
                ->with('i',(request()->input('page',1) -1)*5);
        
        
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.pasienadd');
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
            if (isset($request->foto_profile)){
                $extention = $request->foto_profile->extension();
                $image_name = time().'.'.$extention;
                $request->foto_profile->move(public_path('img/pasien'),$image_name);
    
            }else{
                $image_name = null;
            }
    
            $pasienad = Pasien::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'no_telp' => $request->no_telp,
                'jenis_kelamin' => $request->jenis_kelamin,
                'foto_profile'=> $image_name,
                'status' => $request->status,
                'tgl_lahir' => $request->tgl_lahir,
                'tempat_lahir' => $request->tempat_lahir
            ]);
    
    
    
            return redirect()->route('pasienad.index')
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
        $pasienad = Pasien::find($id);
        return view('layouts.pasiendetail', compact('pasienad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasienad = Pasien::find($id);

        return view('layouts.pasienedit', compact('pasienad'));
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
        // $request->validate([
        //     'isi'=>'required',
        //     'judul' => 'required',
        //     'gambar'=>'required'
        // ]);

        if (isset($request->foto_profile)){
            $extention = $request->foto_profile->extension();
            $image_name = time().'.'.$extention;
            $request->foto_profile->move(public_path('img\pasien-update'),$image_name);
            
        }else{
            $image_name = null;
        }

        $pasienad = Pasien::find($id);
        $pasienad->name = $request->get('name');
        $pasienad->email = $request->get('email');
        // $pasienad->password = $request->get('password');
        $pasienad->no_telp = $request->get('no_telp');
        $pasienad->jenis_kelamin = $request->get('jenis_kelamin');
        $pasienad->foto_profile = $image_name;
        $pasienad->status = $request->get('status');
        $pasienad->tgl_lahir = $request->get('tgl_lahir');
        $pasienad->tempat_lahir = $request->get('tempat_lahir');
        $pasienad->save();

        return redirect()->route('pasienad.index')
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
        $pasienad = Pasien::find($id);
        $pasienad->delete();

        return redirect()->route('pasienad.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
