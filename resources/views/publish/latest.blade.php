<div class="latest-products">
    <div class="container">
        <h2 class="title-div wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
        <div class="products">
            <div class="row">
            @forelse ($products as $item)
            <div class="card" style="width: 18rem; float: left; margin: 40px;">
                    <img src="{{ asset('storage/produk/'.$item->path.'')}}" class="card-img-top" alt="{{ $item->nama }}" width="200" height="200">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $item->nama }}</b></h5>
                        <p class="card-text"><i>Rp {{ number_format($item->harga,2) }}</i></p>
                        <p class="card-text"><font color="red">Stok : {{ $item->stok }}</font></p>
                        <a href="{{ url('/products/detproduk/'.$item->id) }}" class="btn btn-warning">Detail</a>
                    </div>
                </div><!-- End Latest products[single] -->  
                @empty
                    Data tidak ditemukan
                @endforelse
                

                <div class="clearfix"></div>

                



            </div> <!-- End Latest products row-->
            <a href="{{ url('/products') }}" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                <span>See More products.. </span>
            </a>
            <div class="clear"></div>
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div>