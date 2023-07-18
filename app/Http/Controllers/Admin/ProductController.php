<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$this->data['products'] = Product::orderBy('nama', 'ASC')->paginate(20);
        //return view('admin.products.index', $this->data);
        
        //$products = DB::select('select * from produks');
        $products = DB::table('produks')->paginate(10);
        return view('admin.products.index',['products'=>$products])
        ->with('i',(request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = DB::select('select * from categories');
        return view('admin.products.form', $this->data,['cats'=>$cats]);
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
            'kode'      => 'required',
            'kategori'      => 'required',
            'name'      => 'required',
            'harga'      => 'required',
            'stok'      => 'required',
            'deskripsi'      => 'required'
        ]);
        $size = $request->file('file')->getSize(); 
        $namefile = $request->file('file')->getClientOriginalName(); 
        $request->file('file')->storeAs('produk', $namefile);
        //$photo = new Photo();
        //$photo->name=$name;
        //$photo->size=$size;

        $query = DB::table('produks')->insert([
            'kdproduk'=>$request->input('kode'),
            'idkategori'=>$request->input('kategori'),
            'nama'=>$request->input('name'),
            'harga'=>$request->input('harga'),
            'stok'=>$request->input('stok'),
            'path'=>$namefile,
            'deskripsi'=>$request->input('deskripsi'),
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
    public function edit(Product $id)
    {
        $cats = DB::select('select * from categories');
        return view('admin.products.edit', compact('id'),['cats'=>$cats]);
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
            'kode'      => 'required',
            'kategori'      => 'required',
            'name'      => 'required',
            'harga'      => 'required',
            'stok'      => 'required',
            'deskripsi'      => 'required'
        ]);

        $ubah = Product::findorfail($id);
        $old = $ubah->path;

        $request->path->move(public_path().'/storage/produk',$old);

        $size = $request->file('file')->getSize(); 
        $namefile = $request->file('file')->getClientOriginalName(); 
        $request->file('file')->storeAs('public/produk', $namefile);

        $query = DB::table('produks')->where('id',$request->id)->update([
            'kdproduk' => $request->kode,
            'idkategori' => $request->kategori,
            'nama' => $request->name,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'path' => $namefile,
            'deskripsi' => $request->deskripsi
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Product::find($id);
        $data->delete();
        return redirect('admin/products');
    }
}
