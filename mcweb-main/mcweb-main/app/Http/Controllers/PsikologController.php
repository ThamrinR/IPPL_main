<?php

namespace App\Http\Controllers;
use App\Models\psikolog;
use Illuminate\Http\Request;


class PsikologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $psikolog = psikolog::orderBy('id','asc')->paginate(5);
        return view('layouts.psikolog', compact('psikolog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $psikolog = psikolog::create([
            
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nama_toko'=>$request->nama_toko,
     
        ]);

        return redirect()->route('profile')
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
        $psikolog = psikolog::find($id);
        
        return view('layouts.buatjanji', compact('psikolog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psikolog = psikolog::find($id);

        return view('layouts.buatjanji', compact('psikolog'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
