<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Profil;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profils = DB::select('select * from profils');
        return view('admin.profil.index',['profils'=>$profils]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.form', $this->data);
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
            'deskripsi'      => 'required'
        ]);
        $size = $request->file('file')->getSize(); 
        $namefile = $request->file('file')->getClientOriginalName(); 
        $request->file('file')->storeAs('profil', $namefile);
        //$photo = new Photo();
        //$photo->name=$name;
        //$photo->size=$size;

        $query = DB::table('profils')->insert([
            'deskripsi'=>$request->input('deskripsi'),
            'path'=>$namefile,
            'stat_publish'=>0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if($query)
        {
            return back()->with('success','Data have been successfully inserted');
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
    public function edit(Profil $id)
    {
        return view('admin.profil.edit', compact('id'));
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
        $data=Profil::find($id);
        $data->delete();
        return redirect('admin/profils');
    }

    public function publish(Request $request,Profil $id)
    {
        $query = DB::table('profils')->where('id',$id->id)->update([
            'stat_publish' => 1
        ]);
        if($query)
        {
            return redirect('admin/profils')
                ->with('success','About us updated successfully');
        }
    }

    public function unpublish(Request $request,Profil $id)
    {
        $query = DB::table('profils')->where('id',$id->id)->update([
            'stat_publish' => 0
        ]);
        if($query)
        {
            return redirect('admin/profils')
                ->with('success','About us updated successfully');
        }
    }
}
