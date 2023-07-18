<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Artikel;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikels = DB::select('select * from artikels');
        return view('admin.artikels.index',['artikels'=>$artikels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikels.form', $this->data);
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
            'header'      => 'required',
            'deskripsi'      => 'required'
        ]);
 
        $query = DB::table('artikels')->insert([
            'header'=>$request->input('header'),
            'deskripsi'=>$request->input('deskripsi'),
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
    public function edit(Artikel $id)
    {
        return view('admin.artikels.edit', compact('id'));
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
            'name'      => 'required',
            'deskripsi'      => 'required'
        ]);

        $query = DB::table('artikels')->where('id',$request->id)->update([
            'header' => $request->name,
            'deskripsi' => $request->deskripsi
        ]);

         if($query)
        {
            return redirect('admin/artikels')
                ->with('success','Artikels updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Artikel::find($id);
        $data->delete();
        return redirect('admin/artikels');
    }

    public function publish(Request $request,Artikel $id)
    {
        $query = DB::table('artikels')->where('id',$id->id)->update([
            'stat_publish' => 1
        ]);
        if($query)
        {
            return redirect('admin/artikels')
                ->with('success','Artikel updated successfully');
        }
    }

    public function unpublish(Request $request,Artikel $id)
    {
        $query = DB::table('artikels')->where('id',$id->id)->update([
            'stat_publish' => 0
        ]);
        if($query)
        {
            return redirect('admin/artikels')
                ->with('success','Artikel updated successfully');
        }
    }
}
