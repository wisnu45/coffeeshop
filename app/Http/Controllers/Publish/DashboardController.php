<?php

namespace App\Http\Controllers\Publish;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\Product;

use App\Models\Profil;

use App\Models\Aboutus;

use App\Models\Artikel;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = DB::select('select * from produks ORDER BY id DESC LIMIT 4');
        return view('publish.layout',['products'=>$products]);
    }

    public function products()
    {
        $products = DB::select('select * from produks ORDER BY id DESC');
        return view('publish.produk',['products'=>$products]);
    }

    public function profil()
    {
       $profils = DB::select('select * from profils WHERE stat_publish=1');
        return view('publish.profil',['profils'=>$profils]);
    }

    public function about()
    {
       $abouts = DB::select('select * from aboutuss WHERE stat_publish=1');
        return view('publish.about',['abouts'=>$abouts]);
    }

    public function artikels()
    {
       $artikels = DB::select('select * from artikels WHERE stat_publish=1');
        return view('publish.artikel',['artikels'=>$artikels]);
    }

    public function detartikel($id) {
        $itemartikel = Artikel::where('id', $id)
                            ->where('stat_publish', '1')
                            ->first();
       
        return view('publish.artikeldetail',['itemartikel'=>$itemartikel]);            
       
    }

    public function detproduk($id) {
        $itemproduk = Product::where('id', $id)
                            ->first();
       
        return view('publish.produkdetail',['itemproduk'=>$itemproduk]);  
            
       
    }

    public function addproduk($id) {
        if(!Session::get('login')){
            return view('publish.signin');
        }
        else
        {
            $itemproduk = Product::where('id', $id)
                            ->first();
       
            return view('publish.produkaddchart',['itemproduk'=>$itemproduk]);
        }
    }

    public function mywish(Request $request) 
    {
                
            $IDUSER= Auth::user()->id;
            $chartproducts = DB::select('select trolys.id,produks.kdproduk,produks.nama,trolys.qty,trolys.price,trolys.total from trolys LEFT JOIN produks ON trolys.idproduk=produks.id WHERE iduser='.$IDUSER.' ORDER BY id');
            return view('publish.wishlist',['chartproducts'=>$chartproducts]);
        
    }

    public function orders(Request $request) 
    {
                
            $IDUSER= Auth::user()->id;
            $chartproducts = DB::select('select td.qty,td.price,td.total,p.kdproduk,p.nama,tm.kode AS kdtrans,tm.id from transaksidetails td 
                                    LEFT JOIN produks p ON td.idproduk=p.id 
                                    LEFT JOIN transaksimasters tm ON td.idmaster=tm.id WHERE tm.iduser='.$IDUSER.' ORDER BY tm.id');
            return view('publish.orders',['chartproducts'=>$chartproducts]);
        
    }

    public function charts(Request $request)
    {
        $IDUSER= Auth::user()->id;
        $chartproducts = DB::select('select * from trolys WHERE iduser='.$IDUSER.' ORDER BY id');
    }

    public function contact()
    {
       return view('publish.contact');
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
        //
    }

    public function checkout(Request $request)
    {
        $user_id= $request->input('user_id');
        $kode= "T".now()."".$request->input('user_id');

        $id = DB::table('transaksimasters')->insertGetId([
            'iduser'=>$user_id,
            'kode'=>$kode,
            'tanggal'=>now(),
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        
        DB::insert("INSERT INTO transaksidetails(idmaster,idproduk,qty,price,total,created_at,updated_at) SELECT '$id',idproduk,qty,price,total,now(),now() FROM trolys WHERE iduser=?",[$user_id]);
        DB::delete("DELETE FROM trolys WHERE iduser = ?",[$user_id]);
        
        return redirect('/mywish');
       

    }

    public function troly(Request $request)
    {
        $IDUSER= Auth::user()->id;
        $ip= $request->input('idproduk');
        $qt= $request->input('qty');

        $request->validate([
            'qty'      => 'required'
        ]);
       
        $tt=$request->input('qty')*$request->input('harga');
        $query = DB::table('trolys')->insert([
            'iduser'=>$IDUSER,
            'idproduk'=>$request->input('idproduk'),
            'qty'=>$request->input('qty'),
            'price'=>$request->input('harga'),
            'total'=>$tt,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::update("UPDATE produks SET stok=stok-'$qt' WHERE id = ?",[$ip]);

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
