@extends('admin.layout')

@section('content')

@php
    $formTitle = 'Tambah'
@endphp

<div class="content">
    <div class="row">
        <div class="col-lg-6">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>{{ $formTitle }} Kategori</h2>
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
                    <form method="POST" action="{{ url('admin/categories/store1') }}">
                        @csrf
                        
                        <div class="form-group">
                            <label>Nama:</label>
                            <input type="text" name="name" class="form-control" placeholder="Nama kategori" value="{{ old('name') }}"> 
                            <span style="color:red"></span>                       
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-submit">Simpan</button>
                            <a href="{{ url('admin/categories') }}" class="btn btn-primary">Daftar Kategori</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection