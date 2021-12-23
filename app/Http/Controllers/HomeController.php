<?php

namespace App\Http\Controllers;
// use App\Models\siswa;

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
        // $siswa = siswa::all();

        // return view('siswa.index', ['siswa' => $siswa]);
        return view('home');
    }
}
