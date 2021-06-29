<?php

namespace App\Http\Controllers;
use DB;
use App\Pinjaman;
use App\Anggota;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::latest()->paginate(5);
        $pinjamen = Pinjaman::all();
        
        return view('pinjaman.index', ['pinjamen' => $pinjamen],['anggotas' => $anggotas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggotas = Anggota::all();
        $pinjamen = Pinjaman::all();
        
  
        return view('pinjaman.create', ['pinjamen' => $pinjamen],['anggotas' => $anggotas]);
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
            'id_anggota' => 'required',
            'tgl_pinjaman' => 'required',
            'pinjaman' => 'required',
            'jml_pinjaman' => 'required',
            ]);
            Pinjaman::create($request->all());
            return redirect()->route('pinjaman.index')
                            ->with('success','Pinjaman Berhasil Di Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Pinjaman $pinjaman)
    {
        return view('pinjaman.show', compact('pinjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function edit($id_pinjaman)
    {
        $data = DB::table('pinjamen')->where('id_pinjaman',$id_pinjaman)->first();
        return view('pinjaman/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pinjaman $pinjaman)
    {
        // $request->validate([
        //     'id_anggota' => 'required',
        //     'tgl_pinjaman' => 'required',
        //     'pinjaman' => 'required',
        //     'jml_pinjaman' => 'required',
        //     ]);

        $data = DB::table('pinjamen')->where('id_pinjaman',$request->id_pinjaman)->update([
            'id_anggota' => $request->id_anggota,
            'tgl_pinjaman' => $request->tgl_pinjaman,
            'pinjaman' => $request->pinjaman,
            'jml_pinjaman' => $request->jml_pinjaman,
        ]);
           
            return redirect('/pinjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinjaman  $pinjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pinjaman)
    {
        DB::table('pinjamen')->where('id_pinjaman',$id_pinjaman)->delete();
        return redirect('/pinjaman')->with('success','Pinjaman Berhasil Di Hapus');
    }
}
