<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = User::all();

        return view('formMultiple.index', compact('form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('formMultiple.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        // $input = $request->all();

        // $form = Form::create($input);
        // // Form::create($request->all());

        // return back()->with('success', 'Form Baru Berhasil Dibuat');
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
        $form = User::findOrFail($id);

        return view('formMultiple.edit', [
            'form' => $form
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
            'name' => 'required',
            'email' => 'required|max:150',
        ]);

        $form = User::find($id)->update($request->all());

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
        $form = User::find($id);

        $form->delete();

        return back()->with('success', 'Data Deleted Successfully');
    }

    public function reset(Request $request, $id)
    {
        $form = User::findOrFail($id);

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'con_password' => 'required'
        ]);

        if($form){
            if(Hash::check($request->old_password, $form->password) ){
                if($request->new_password == $request->con_password){
                    User::find($id)->update([
                        'password' => Hash::make($request->new_password)
                    ]);

                    return back()->with('success', 'Password Successfully Reset.');
                }else{
                    return back()->with('danger', 'Password failed to reset, new password is not the same as confirmation password');
                }
            }
            
        }
    }
}