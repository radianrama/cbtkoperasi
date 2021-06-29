<?php

namespace App\Http\Controllers;
use DB;
use App\Simpanan;
use App\Anggota;
use Illuminate\Http\Request;

class SimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::latest()->paginate(5);
        $simpanan = Simpanan::all();
        
        //simpanans = Simpanan::latest()->paginate(5);
  
        return view('simpanan.index', ['simpanans' => $simpanan],['anggotas' => $anggotas]);
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggotas = Anggota::all();
        $simpanan = Simpanan::all();
        
        //simpanans = Simpanan::latest()->paginate(5);
  
        return view('simpanan.create', ['simpanans' => $simpanan],['anggotas' => $anggotas]);
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        // 'id_simpanan' => 'required',
        
        'tgl_simpanan' => 'required',
        'simpanan' => 'required',
        'jml_simpanan' => 'required',
        ]);
        Simpanan::create($request->all());
        return redirect()->route('simpanan.index')
                        ->with('success','Simpanan Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function show(Simpanan $simpanan)
    {
        return view('simpanan.show', compact('simpanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function edit($id_simpanan)
    {
        $data = DB::table('simpanans')->where('id_simpanan',$id_simpanan)->first();
        return view('simpanan/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_simpanan)
    {
        $data = DB::table('simpanans')->where('id_simpanan',$request->id_simpanan)->update([
            'id_anggota' => $request->id_anggota,
            'tgl_simpanan' => $request->tgl_simpanan,
            'simpanan' => $request->simpanan,
            'jml_simpanan' => $request->jml_simpanan,
        ]);
            return redirect('/simpanan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Simpanan  $simpanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_simpanan)
    {
        DB::table('simpanans')->where('id_simpanan',$id_simpanan)->delete();
        return redirect('/simpanan')->with('success','Simpanan Berhasil Di Hapus');
    }
}
