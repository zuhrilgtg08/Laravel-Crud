<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komputer;

class KomputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komputer = komputer::all();

        return view('komputer.index', ['komputer' => $komputer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komputer.create');
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
            'namaBarang' => 'required',
            'kodeBarang' => 'required',
            'hargaBarang' => 'required',
            'jumlahBarang' => 'required'
        ]);
        $input = $request->all();

        $komputer = komputer::create($input);

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
        $komputer = komputer::findOrFail($id);

        return view('komputer.edit', [
            'komputer' => $komputer
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
            'namaBarang' => 'required',
            'kodeBarang' => 'required',
            'hargaBarang' => 'required',
            'jumlahBarang' => 'required'
        ]);

        $komputer = komputer::find($id)->update($request->all());

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
        $komputer = komputer::find($id);

        $komputer->delete();

        return back()->with('success', 'Data Deleted Successfully');
    }
}
