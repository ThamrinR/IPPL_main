<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UbahprofileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        return view('profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createUser');
    }

    /**  
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $User = User::create([
         
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nama_toko'=>$request->nama_toko,
            
        ]);

        return redirect()->route('User.index')
                         ->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = User::find($id);

        return view('User.detail-profile', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editpro = User::find($id);

        return view('editpro', compact('editpro'));
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

        $User = User::find($id);
        $User->name = $request->get('name');
        // $User->password = $request->get('password');
        $User->no_telp = $request->get('no_telp');
        $User->tgl_lahir = $request->get('tgl_lahir');
        $User->tempat_lahir = $request->get('tempat_lahir');
        // $User->jenis_kelamin = $request->get('jenis_kelamin');  
        // $User->foto_profile = $request->get('foto_profile');
        $User->status = $request->get('status');
        $User->save();
        $User = User::find($id);

        if (isset($request->foto_profile)) {
            $extention = $request->foto_profile->extension();
            $image_name = time() . '.' . $extention;
            $request->foto_profile->move(public_path('img\avatar'), $image_name);
            
            $User->foto_profile = $image_name;
        } else {
            $image_name = null;
        } 
        $User->save();
        return redirect()->route('editpro.index')
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
        $User = User::find($id);
        $User->delete();

        return redirect()->route('User.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
