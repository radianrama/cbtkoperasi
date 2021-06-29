<?php

namespace App\Http\Controllers;
use DB;
use App\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::latest()->paginate(5);
  
        return view('anggota.index',compact('anggotas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
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
            // 'id_anggota' => 'required',
            'nama' => 'required',
            'tgl_gabung' => 'required',
            'telp' => 'required',
            'jenis_kelamin' => 'required',
            'kota' => 'required',
            'tgl_lahir' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
        Anggota::create($request->all());
        return redirect()->route('anggota.index')
                        ->with('success','Anggota Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        return view('anggota.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit($id_anggota)
    {
        $data = DB::table('anggotas')->where('id_anggota',$id_anggota)->first();
        return view('anggota/edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'tgl_gabung' => 'required',
        //     'telp' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'kota' => 'required',
        //     'tgl_lahir' => 'required',
        //     'pekerjaan' => 'required',
        //     'alamat' => 'required',
        // ]);
        $data = DB::table('anggotas')->where('id_anggota',$request->id_anggota)->update([
            'nama' => $request->nama,
            'tgl_gabung' => $request->tgl_gabung,
            'telp' => $request->telp,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kota' => $request->kota,
            'tgl_lahir' => $request->tgl_lahir,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat
        ]);

        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_anggota)
    {
        DB::table('anggotas')->where('id_anggota',$id_anggota)->delete();
        return redirect('/anggota')->with('success','Anggota Berhasil Di Hapus');
        // $anggota->delete();
        
        // return redirect()->route('anggota.index')
        //                 ->with('success','Anggota Berhasil Di Hapus');
    }
}
