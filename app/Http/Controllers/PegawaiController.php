<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;

use Illuminate\Http\Request;
use Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pegawai::all();
        return view('pegawai.main')->with('pgw', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pg = new pegawai;

        $pg->Nama = $request->get('Nama');
        $pg->jenis_kelamin = $request->get('jenis_kelamin');
        $pg->Alamat = $request->get('Alamat');
        $pg->Jabatan = $request->get('Jabatan');
        $pg->Gaji = $request->get('Gaji');

        $pg->save();

        Alert::success('Sukses bro', 'Data Geus di Tambah euy');
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pg = Pegawai::getPegawai($id);
        return response()->json($pg);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $pg = Pegawai::where('id', $request->get('id'))
        ->update([
            'Nama' => $request->get('Nama'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'Alamat' => $request->get('Alamat'),
            'Jabatan' => $request->get('Jabatan'),
            'Jabatan' => $request->get('Gaji'),
        ]);

        Alert::success('Sukses', 'Data Berhasil Diubah!');
        return redirect('/pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pg = Pegawai::where('id', $request->get('id'))
             ->delete();

             Alert::success('Sukses', 'Data Berhasil Dihapus !');
             return redirect('/pegawai');
    }
}
