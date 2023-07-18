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
                    <h2>{{ $formTitle }} About Us</h2>
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
                    <form method="POST" action="{{ url('admin/abouts/store') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group w-400">
                            <label>Deskripsi:</label>
                            <textarea name="deskripsi" class="form-control input-lg" placeholder="Deskripsi about us" cols="80" rows="10">
                            </textarea> 
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-submit">Simpan</button>
                            <a href="{{ url('admin/abouts') }}" class="btn btn-primary">About us</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection