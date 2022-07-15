<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Barang::all();
        return view('barang.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
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
            'barang_nama' => 'bail|required|unique:tb_barang',
            'barang_merek' => 'required',
            'barang_hrgbeli' => 'required',
            'barang_hrgjual' => 'required',
            'barang_satuan' => 'required',
            'barang_stok' => 'required'
            ],
            [
                'barang_nama.required' => 'Nama Barang wajib diisi',
                'barang_merek.required' => 'Merek Barang wajib diisi',
                'barang_hrgbeli.required' => 'Harga Beli Barang wajib diisi',
                'barang_hrgjual.required' => 'Harga Jual Barang wajib diisi',
                'barang_satuan.required' => 'Satuan Barang wajib diisi',
                'barang_stok.required' => 'Stok Barang wajib diisi'
            ]);

            Barang::create([
                'barang_nama' => $request->barang_nama,
                'barang_merek' => $request->barang_merek,
                'barang_hrgbeli' => $request->barang_hrgbeli,
                'barang_hrgjual' => $request->barang_hrgjual,
                'barang_satuan' => $request->barang_satuan,
                'barang_stok' => $request->barang_stok
                ]);
                
                return redirect('barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Barang::findOrFail($id);
        return view('barang.edit', compact('row'));
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
        $request->validate(
            [
            'barang_nama' => 'bail|required',
            'barang_merek' => 'required',
            'barang_hrgbeli' => 'required',
            'barang_hrgjual' => 'required',
            'barang_satuan' => 'required',
            'barang_stok' => 'required'
            ],
            [
            'barang_nama.required' => 'Nama Barang wajib diisi',
            'barang_merek.required' => 'Merek Barang wajib diisi',
            'barang_hrgbeli.required' => 'Harga Beli Barang wajib diisi',
            'barang_hrgjual.required' => 'Harga Jual Barang wajib diisi',
            'barang_satuan.required' => 'Satuan Barang wajib diisi',
            'barang_stok.required' => 'Stok Barang wajib diisi'
            ]
            );

            $row = Barang::findOrFail($id);
            $row->update([
            'barang_nama' => $request->barang_nama,
            'barang_merek' => $request->barang_merek,
            'barang_hrgbeli' => $request->barang_hrgbeli,
            'barang_hrgjual' => $request->barang_hrgjual,
            'barang_satuan' => $request->barang_satuan,
            'barang_stok' => $request->barang_stok
            ]);

            return redirect('Barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Barang::findOrFail($id);
        $row->delete();

        return redirect('barang');
    }
}