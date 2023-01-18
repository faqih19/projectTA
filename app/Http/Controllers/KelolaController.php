<?php

namespace App\Http\Controllers;
use App\Models\Kelola;

use Illuminate\Http\Request;
use Alert;

class KelolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kelola::all();
        return view('kelola.main')->with('klo', $data);
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
        $kl = new kelola;

        $kl->kode_kendaraan = $request->get('kode_kendaraan');
        $kl->nama_kendaraan = $request->get('Nama');
        $kl->tahun_pembuatan = $request->get('Tahun');
        $kl->status_jual = $request->get('Status');
        $kl->harga = $request->get('Harga');
        $kl->status_motor = $request->get('StatusMotor');
        $kl->isi_slinder = $request->get('Slinder');
        $kl->no_stnk = $request->get('NoStnk');
        $kl->no_rangka = $request->get('NoRangka');
        $kl->no_mesin = $request->get('NoMesin');
        $kl->tanggal = $request->get('Tanggal');
        $kl->warna = $request->get('Warna');
        $kl->bahan_bakar = $request->get('BahanBakar');
        $kl->warna_tnkb = $request->get('WarnaTNKB');
        $kl->foto = $request->get('Foto');
        $kl->deskripsi = $request->get('des');

        $kl->save();

        Alert::success('Sukses bro', 'Data Geus di Tambah euy');
        return redirect('/kelola');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kl = Kelola::getKelola($id);
        return response()->json($kl);
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
        $kl = Kelola::where('id', $request->get('id'))
        ->update([
            'kode_kendaraan' => $request->get('kode_kendaraan'),
            'nama_kendaraan' => $request->get('Nama'),
            'tahun_pembuatan' => $request->get('Tahun'),
            'status_jual' => $request->get('Status'),
            'harga' => $request->get('Harga'),
            'status_motor' => $request->get('StatusMotor'),
            'isi_slinder' => $request->get('Slinder'),
            'no_stnk' => $request->get('NoStnk'),
            'no_rangka' => $request->get('NoRangka'),
            'no_mesin' => $request->get('NoMesin'),
            'tanggal' => $request->get('Tanggal'),
            'warna' => $request->get('Warna'),
            'bahan_bakar' => $request->get('BahanBakar'),
            'warna_tnkb' => $request->get('WarnaTNKB'),
            'foto' => $request->get('Foto'),
            'deskripsi' => $request->get('des'),
        ]);
        Alert::success('Sukses', 'Data Behasil Diubah!');
        return redirect('/kelola');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $kl = Kelola::where('id', $request->get('id'))
            ->delete();

            Alert::success('Sukses', 'Data Berhasil Dihapus !');
            return redirect('/kelola');
    }
}
