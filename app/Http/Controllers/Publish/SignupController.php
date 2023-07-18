<?php

namespace App\Http\Controllers\Publish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function signup()
    {
       return view('publish.signup');
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
        $request->validate([
            'name'      => 'required',
            'telp'      => 'required',
            'alamat'      => 'required',
            'email'      => 'required',
            'pswd'      => 'required'
        ]);
 
        $query = DB::table('users')->insert([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>MD5($request->input('pswd')),
            'nohp'=>$request->input('telp'),
            'almt'=>$request->input('alamat'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if($query)
        {
            //return back()->with('success','Data have been successfully inserted');
            return redirect('/signup')->with('success','Isi flash message');
        }else
        {
            return back()->with('failed','Something when wrong');
        }
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
        //
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
