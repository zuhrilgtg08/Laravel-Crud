<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ruang;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ruang = ruang::all();

        return view('ruang.index', ['ruang' => $ruang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruang.create');
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
            'nomor_ruangan' => 'required|unique:ruangs|max:150',
            'nama_ruangan' => 'required',
            'lantai_ruangan' => 'required'
        ]);
        $input = $request->all();

        $barang = ruang::create($input);

        return back()->with('success', 'Data Added Successfully');
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
        $ruang = ruang::findOrFail($id);

        return view('ruang.edit', [
            'ruang' => $ruang
        ]);
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
        $request->validate([
            'nama_ruangan' => 'required|max:150',
            'nomor_ruangan' => 'required',
            'lantai_ruangan' => 'required'
        ]);

        $ruang = ruang::find($id)->update($request->all());

        return back()->with('success', 'Data Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ruang = ruang::find($id);

        $ruang->delete();

        return back()->with('success', 'Data Deleted Successfully');
    }
}
