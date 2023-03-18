<?php

namespace App\Http\Controllers;

use App\Models\Penggajian;
use App\Models\Absen;
use App\Models\Pegawai;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Alert;
use DB;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pegawai::all();

        $getDataPegawai = Pegawai::all();
        foreach ($getDataPegawai as $peg) :

            $check = Absen::whereDate('created_at', Carbon::today())->where('id_pegawai', $peg->id_pegawai)->first();

            if (!empty($check)) {
            } else {
                $absen = new Absen;
                $absen->id_pegawai = $peg->id_pegawai;
                $absen->status = '0';
                $absen->save();
            }

        endforeach;


        $absens = Absen::all();
        $absens = Absen::whereDate('created_at', Carbon::today())->get();
        return view('absen.main', compact('absens'));
    }

    public function changeStatus(Request $request)
    {
        $absen = Absen::find($request->id);
        $absen->status = $request->status;
        $absen->save();

        $idpegawai = $absen->id_pegawai;


        $checkAbsensi = DB::table('absensi')
            ->selectRaw('(SELECT count(status) FROM absensi WHERE status = 1 AND id_pegawai = "' . $idpegawai . '") as `jml_hadir`, (SELECT count(status) FROM absensi WHERE status = 0 AND id_pegawai = "' . $idpegawai . '") as `jml_tidak_hadir`')
            ->where('id_pegawai', $idpegawai)
            ->first();

        $checkPenggajian = DB::table('penggajian')
            ->where('id_pegawai', $idpegawai)
            ->first();

        $gaji = '125000';
        $absen = (!empty($checkAbsensi) ? $checkAbsensi->jml_hadir : 0);
        $total_absen =  $absen;
        $gaji_di_termia = ($absen > 0 ? $gaji * $total_absen : 0);

        if (empty($checkPenggajian)) {

            $getPegawai = Pegawai::findOrFail($idpegawai);
            $penggajian = new Penggajian;
            $penggajian->nama = $getPegawai->nama;
            $penggajian->jabatan = $getPegawai->jabatan;
            $penggajian->id_pegawai = $idpegawai;
            $penggajian->gaji_pokok = $gaji;
            $penggajian->jml_hadir = $absen;
            $penggajian->gaji_diterima = $gaji_di_termia;
            $penggajian->absen_id = null;

            $penggajian->save();
        } else {
            $getPegawai = Pegawai::findOrFail($idpegawai);
            $penggajian = Penggajian::findOrFail($checkPenggajian->id);
            $penggajian->nama = $getPegawai->nama;
            $penggajian->jabatan = $getPegawai->jabatan;
            $penggajian->id_pegawai = $idpegawai;
            $penggajian->gaji_pokok = $gaji;
            $penggajian->jml_hadir = $absen;
            $penggajian->gaji_diterima = $gaji_di_termia;
            $penggajian->absen_id = null;

            $penggajian->update();
        }


        return response()->json(['success' => 'Status change successfully.']);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absen = Absen::getAbsen($id);
        return response()->json($absen);
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
        $absen = Absen::where('id', $request->get('id'))
            ->update([
                'status' => $request->get('status'),
            ]);

        return redirect('absen.main')->with('updated_success', 'Data Berhasil diupdate');
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
