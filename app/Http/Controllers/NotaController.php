<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Nota::all();
        return view('nota.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nota.create');
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
            'nota_tanggalinput' => 'bail|required|unique:tb_nota',
            'nota_tanggalupdate' => 'required'
            ],
            [
                'nota_tanggalinput.required' => 'Tanggal input wajib diisi',
                'nota_tanggalupdate.required' => 'Tanggal update wajib diisi'
            ]);
            
            Nota::create([
                'nota_tanggalinput' => $request->nota_tanggalinput,
                'nota_tanggalupdate' => $request->nota_tanggalupdate
                ]);
                
                return redirect('nota');
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
        $row = Nota::findOrFail($id);
        return view('nota.edit', compact('row'));
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
            'nota_tanggalinput' => 'bail|required',
            'nota_tanggalupdate' => 'required'
            ],
            [
            'nota_tanggalinput.required' => 'Tanggal input wajib diisi',
            'nota_tanggalupdate.required' => 'Tanggal update wajib diisi'
            ]
            );
            
            $row = Nota::findOrFail($id);
            $row->update([
            'nota_tanggalinput' => $request->nota_tanggalinput,
            'nota_tanggalupdate' => $request->nota_tanggalupdate,
            ]);
            
            return redirect('nota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Nota::findOrFail($id);
        $row->delete();

        return redirect('nota');
    }
}
