<?php

namespace App\Http\Controllers;
use App\Models\Barang;

use Illuminate\Http\Request;
use Alert;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();
        return view('barang.main')->with('brg', $data);
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
        $br = new barang;

        $br->merk = $request->get('Merk');
        $br->type = $request->get('Type');

        $br->save();

        Alert::success('Sukses bro', 'Data Geus di Tambah euy');
        return redirect('/barang');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $br = Barang::getBarang($id);
        return response()->json($br);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // echo "ada";
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
        $br = Barang::where('id', $request->get('id'))
        ->update([
            'merk' => $request->get('merk'),
            'type' => $request->get('type'),
        ]);

        Alert::success('Sukses', 'Data Berhasil Diubah!');
        return redirect('/barang');
        // $br = Barang::find($id);

        // $br->merk = $request->merk;
        // $br->type = $request->type;

        // return response()->json(['br' => true, 'message' => 'success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $br = Barang::where('id', $request->get('id'))
             ->delete();

             Alert::success('Sukses', 'Data Berhasil Dihapus !');
             return redirect('/barang');
    }
}
