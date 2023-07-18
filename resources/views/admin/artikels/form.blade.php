@extends('admin.layout')

@section('content')

@php
    $formTitle = 'Tambah'
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>{{ $formTitle }} Artikel</h2>
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
                    <form method="POST" action="{{ url('admin/artikels/store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label>File:</label>
                            <input type="text" name="header" class="form-control" id="header" placeholder="Judul artikel">
                            <span style="color:red"></span>  
                        </div>
                        <div class="form-group w-400">
                            <label>Deskripsi:</label>
                            <textarea name="deskripsi" class="form-control input-lg" placeholder="Deskripsi profil" cols="80" rows="10">
                            </textarea> 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-submit">Simpan</button>
                            <a href="{{ url('admin/artikels') }}" class="btn btn-primary">Artikel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection