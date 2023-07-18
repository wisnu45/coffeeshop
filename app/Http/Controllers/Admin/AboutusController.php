<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Aboutus;

class AboutusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = DB::select('select * from aboutuss');
        return view('admin.aboutuss.index',['abouts'=>$abouts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutuss.form', $this->data);
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
 
        $query = DB::table('aboutuss')->insert([
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
    public function edit(Aboutus $id)
    {
        return view('admin.aboutuss.edit', compact('id'));
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
            'deskripsi'      => 'required'
        ]);

        $query = DB::table('aboutuss')->where('id',$request->id)->update([
            'deskripsi' => $request->deskripsi
        ]);

         if($query)
        {
            return redirect('admin/abouts')
                ->with('success','About us updated successfully');
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
        //
    }

    public function publish(Request $request,Aboutus $id)
    {
        $query = DB::table('aboutuss')->where('id',$id->id)->update([
            'stat_publish' => 1
        ]);
        if($query)
        {
            return redirect('admin/abouts')
                ->with('success','About us updated successfully');
        }
    }

    public function unpublish(Request $request,Aboutus $id)
    {
        $query = DB::table('aboutuss')->where('id',$id->id)->update([
            'stat_publish' => 0
        ]);
        if($query)
        {
            return redirect('admin/abouts')
                ->with('success','About us updated successfully');
        }
    }
}
