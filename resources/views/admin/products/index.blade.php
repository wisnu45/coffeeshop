@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="row col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Produk</h2>

                    </div>

                    <div class="card-body">
                        <div class="basic-data-table">  
                            <table id="basic-data-table" class='table-hover table-responsive noSwipe' class="table nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Image</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Path</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($products as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $item->kdproduk }}</td>
                                                <td><img src="{{ asset('storage/produk/'.$item->path.'')}}" height="128" width="128"></td>
                                                
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->idkategori }}</td>
                                                <td>{{ number_format($item->harga) }}</td>
                                                <td align="center">{{ $item->stok }}</td>
                                                <td>{{ $item->path }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td><a href="{{ url('admin/products/edit/'.$item->id) }}" class="btn btn-success">EDIT</a>&nbsp;<a href="{{ url('admin/products/del/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">DELETE</a>&nbsp;
                                            </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan='9'>Data tidak ditemukan</td>
                                            </tr>
                                        @endforelse
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('admin/products/add') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection