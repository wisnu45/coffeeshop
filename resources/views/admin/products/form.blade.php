@extends('admin.layout')

@section('content')

@php
    $formTitle = !empty($category) ? 'Update' : 'Tambah'
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>{{ $formTitle }} Produk</h2>
                </div>
                <div class="card-body">
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    @if(Session::get('failed'))
                        <div class="alert alert-danger">
                            {{ Session::get('failed') }}
                        </div>
                    @endif
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label>Kode:</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode produk" value="{{ old('kode') }}"> 
                        <span style="color:red"></span>                       
                    </div>
                    <div class="form-group">
                        <label>Kategori:</label>
                        <select name="kategori" class="form-control">
                            <option value="">Pilih kategori barang...</option>
                            @foreach ($cats as $kate)
                                <option value="{{ $kate->id }}">{{ $kate->nama }}</option>
                            @endforeach
                        </select>
                        <span style="color:red"></span>                       
                    </div>

                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama barang">
                        <span style="color:red"></span>  
                    </div>

                    <div class="form-group">
                        <label>Harga Jual:</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga Jual">
                        <span style="color:red"></span>  
                    </div>

                    <div class="form-group">
                        <label>Stok:</label>
                        <input type="number" name="stok" class="form-control" placeholder="Stok">
                        <span style="color:red"></span>  
                    </div>
                    <div class="form-group">
                        <label>File:</label>
                        <input type="file" name="file" class="form-control" id="file" placeholder="File Gambar">
                        <span style="color:red"></span>  
                    </div>
                    <div class="form-group">
                        <label>Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi barang">
                        </textarea> 
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success btn-submit">Simpan</button>&nbsp;
                        <a href="{{ url('admin/products') }}" class="btn btn-primary">Daftar Produk</a>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection