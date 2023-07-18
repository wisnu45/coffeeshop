<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->data['categories'] = Category::orderBy('nama', 'ASC')->paginate(10);
        //return view('admin.categories.index', $this->data);
        $categories= Category::latest()->paginate();
        //$categories = DB::table('categories')->paginate();
        return view('admin.categories.index',compact('categories'))
        ->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.form', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $request->validate([
            'name'      => 'required'
        ]);
 
        $query = DB::table('categories')->insert([
            'nama'=>$request->input('name'),
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
      /* // $user           = new User;
        $user->nama     = $request->name;
        $user->save();
       //return back()->with('success', 'User created successfully.');
        return view('admin.categories.form', $this->data);
        return $request->input();*/
    }

    public function store(Request $request)
    {
        //
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
    public function edit(Category $id)
    {
        //$post = Category::findOrFail($id);
        return view('admin.categories.edit', compact('id'));
        
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
            'name'      => 'required'
        ]);

        $query = DB::table('categories')->where('id',$request->id)->update([
            'nama' => $request->name
        ]);

         if($query)
        {
            return redirect('admin/categories')
                ->with('success','Category updated successfully');
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
        $data=Category::find($id);
        $data->delete();
        return redirect('admin/categories');
    }
}
