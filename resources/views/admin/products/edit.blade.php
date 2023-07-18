@extends('admin.layout')

@section('content')

@php
    $formTitle = 'Update'
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
                <form method="POST" action="{{ url('admin/products/update',$id->id) }}" multipart="form.data()">
                    @csrf
                    
                    <div class="form-group">
                        <label>Kode:</label>
                        <input type="text" name="kode" class="form-control" placeholder="Kode produk" value="{{ $id->kdproduk }}"> 
                        <span style="color:red"></span>                       
                    </div>
                    <div class="form-group">
                        <label>Kategori:</label>
                        <select name="kategori" class="form-control">
                            <option value="">Pilih kategori barang...</option>
                            @foreach ($cats as $kate)
                                <option value="{{ $kate->id }}" {{ ( $kate->id == $id->idkategori) ? 'selected' : '' }}>{{ $kate->nama }}</option>
                               
                            @endforeach
                        </select>
                        <span style="color:red"></span>                       
                    </div>

                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama barang" value="{{ $id->nama }}">
                        <span style="color:red"></span>  
                    </div>

                    <div class="form-group">
                        <label>Harga Jual:</label>
                        <input type="number" name="harga" class="form-control" placeholder="Harga Jual" value="{{ $id->harga }}">
                        <span style="color:red"></span>  
                    </div>

                    <div class="form-group">
                        <label>Stok:</label>
                        <input type="number" name="stok" class="form-control" placeholder="Stok" value="{{ $id->stok }}">
                        <span style="color:red"></span>  
                    </div>
                    <div class="form-group">
                        
                        <label>File:</label>
                        <img src="{{ asset('storage/produk/'.$id->path.'')}}" height="128" width="128">
                        <input type="file" name="file" class="form-control" placeholder="File Gambar" value="{{ $id->path }}">
                        <span style="color:red"></span>  
                    </div>
                    <div class="form-group">
                        <label>Deskripsi:</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi barang">{{ $id->deskripsi }}
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
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Gambar Produk</h2>
                </div>
                <div class="card-body">
                   
                  
                    
                    <div class="form-group">
                        
                        <img src="{{ asset('storage/produk/'.$id->path.'')}}" height="128" width="128">
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection