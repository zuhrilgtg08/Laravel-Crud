<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\siswa;
use App\Models\guru;
use App\Models\kelass;
use App\Models\ruang;
use App\Models\jadwal;
use App\Models\form;
use App\Models\barang;
use App\Models\Komputer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $show = [
            'guru' => guru::get(),
            'siswa' => siswa::get(),
            'kelas' => kelass::get(),
            'ruang' => ruang::get(),
            'jadwal' => jadwal::get(),
            'user' => User::get(),
            'barang' => barang::get(),
            'komputer' => komputer::get()
        ];
        return view('home', $show);
    }

    public function create(){

        return view('dasboard');
    } 
}
