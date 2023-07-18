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
                    <h2>Update Kategori</h2>
                </div>
                <div class="card-body">
                   
                    <form method="POST" action="{{ url('admin/categories/update',$id->id) }}">
                        @csrf
                    
                        
                        <div class="form-group">
                            <label>Nama:</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama kategori" value="{{ $id->nama }}"> 
                            <span style="color:red"></span>                       
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-submit">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-right">
                        <a href="{{ url('admin/categories') }}" class="btn btn-primary">Daftar</a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection