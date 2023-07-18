<div class="latest-products">
    <div class="container">
        <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">All Products available</h2>
        <div class="products">
            <div class="row">
            @forelse ($products as $item)
                <!-- End Latest products[single] -->  
                <div class="card" style="width: 18rem; float: left; margin: 40px;">
                    <img src="{{ asset('storage/produk/'.$item->path.'')}}" class="card-img-top" alt="{{ $item->nama }}" width="150" height="150">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $item->nama }}</b></h5>
                        <p class="card-text"><i>Rp {{ number_format($item->harga,2) }}</i></p>
                        <p class="card-text"><font color="red">Stok : {{ $item->stok }}</font></p>
                        <a href="{{ url('/products/detproduk/'.$item->id) }}" class="btn btn-warning">Detail</a>
                        <!--<a href="#" class="btn btn-danger">Add to chart</a>-->
                    </div>
                </div>
                @empty
                    Data tidak ditemukan
                @endforelse
                

                <div class="clearfix"></div>

                



            </div> <!-- End Latest products row-->
           
            <div class="clear"></div>
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div>