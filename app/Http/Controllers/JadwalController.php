<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;
use App\Models\jadwal;
use App\Models\kelass;
use App\Models\ruang;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $data= Jadwal::all();
        $data = Jadwal::join('gurus', 'gurus.id', '=', 'jadwals.id_guru')
                        ->join('kelasses', 'kelasses.id', '=', 'jadwals.id_kelas')
                        ->join('ruangs', 'ruangs.id', '=', 'jadwals.id_ruangan')
                        ->get(['jadwals.id', 'gurus.nama_guru', 'kelasses.nama_kelas', 'gurus.mata_pelajaran', 'ruangs.nama_ruangan', 'jadwals.mulai', 'jadwals.akhir', 'jadwals.tanggal']);
        return view('jadwal.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'guru' => guru::select('id', 'nama_guru')->get(),
            'kelas' => kelass::select('id', 'nama_kelas')->get(),
            'ruangan' => ruang::select('id', 'nama_ruangan')->get(),
        ];

        return view('jadwal.create', $data);

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
            'id_guru' => 'required|max:150',
            'id_kelas' => 'required|max:150',
            'id_ruangan' => 'required',
            'mulai' => 'max:100',
            'akhir' => 'max:100',
            'tanggal' => 'max:100'
        ]);

        $input = $request->all();

        $jadwal = Jadwal::create($input);

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
        $data = [
            'jadwal' => Jadwal::findOrFail($id),
            'guru' => guru::select('id', 'nama_guru')->get(),
            'kelas' => kelass::select('id', 'nama_kelas')->get(),
            'ruangan' => ruang::select('id', 'nama_ruangan')->get(),
        ];
        
        // dd($data);
        return view('jadwal.edit', $data);
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
            'id_guru' => 'required|max:150',
            'id_kelas' => 'required',
            'id_ruangan' => 'required',
            'mulai' => 'required|max:100',
            'akhir' => 'required|max:100',
            'tanggal' => 'required|max:100'
        ]);

        $jadwal = jadwal::find($id)->update($request->all());

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
        $jadwal = Jadwal::find($id);

        $jadwal->delete();

        return back()->with('success', 'Data Deleted Successfully');
    }
}
