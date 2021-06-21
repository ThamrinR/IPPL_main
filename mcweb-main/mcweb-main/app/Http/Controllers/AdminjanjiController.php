<?php

namespace App\Http\Controllers;
use App\Models\psikolog;
use App\Models\user;
use App\Models\booking;
use Illuminate\Http\Request;

class AdminjanjiController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $User = User::orderBy('id','asc')->paginate(5);
        $adminjanji = booking::select(            
            'booking.jadwal_psikolog',
            'booking.bukti_pembayaran',
            'booking.status',
            'booking.id',
            'users.name',
            'psikolog.nama_psikolog')
            ->join('psikolog','booking.psikolog_id','=','psikolog.id')
            ->join('users','users.id','=','booking.user_id')->get();
            
        // dd($adminjanji);
        return view('layouts.adminjanji',compact('adminjanji'))
                ->with('i',(request()->input('page',1) -1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createpsikolog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
        if (isset($request->image)){
            $extention = $request->image->extension();
            $image_name = time().'.'.$extention;
            $request->image->move(public_path('img\avatar'),$image_name);
            
        }else{
            $image_name = null;
        }

        $user = User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'role' => 'psikolog',
            'foto' => $image_name,
        ]);
        
        $psikolog = psikolog::create([
            'id'=>$user->id,
            'nama'=>$request->nama,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'alamat' => $request->alamat,
            'nama_toko'=>$request->nama_toko,
            'user_id'=>$user->id
        ]);

        return redirect()->route('psikolog.index')
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
        $adminjanji = booking::select(            
            'booking.jadwal_psikolog',
            'booking.bukti_pembayaran',
            'booking.status',
            'booking.id',
            'users.name',
            'users.email',
            'users.no_telp',
            'psikolog.no_telp as nohppsikolog',
            'psikolog.email as psikologmail',
            'booking.biaya_konsultasi',
            'psikolog.nama_psikolog')
            ->join('psikolog','booking.psikolog_id','=','psikolog.id')
            ->join('users','users.id','=','booking.user_id')->find($id);
// dd($adminjanji);
        return view('layouts.detailjanji', compact('adminjanji'));
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

        return view('admin.editpsikolog', compact('psikolog'));
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

        

        $adminjanji = booking::find($id);

        if($_POST['status'] == "Terima"){
            $adminjanji->status = 'Terima';
        }
        else{
            $adminjanji->status = 'Tolak';
        }
        $adminjanji->save();

        return redirect()->route('adminjanji.index')
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
        $psikolog = psikolog::find($id);
        $psikolog->delete();

        return redirect()->route('psikolog.index')
                         ->with('success', 'Data Alumni berhasil dihapus');
    }
}
