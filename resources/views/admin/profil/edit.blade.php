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
                    <h2>Update Profil</h2>
                </div>
                <div class="card-body">
                   
                    <form method="POST" action="{{ url('admin/profils/update',$id->id) }}">
                        @csrf
                    
                        
                        <div class="form-group">
                            <label>Deskripsi:</label>
                            <textarea name="deskripsi" class="form-control input-lg" placeholder="Deskripsi about us" cols="80" rows="10">
                            {{ $id->deskripsi }}
                            </textarea>                    
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-submit">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-right">
                        <a href="{{ url('admin/profils') }}" class="btn btn-primary">Profil</a>
                    </div>
            </div>
        </div>
    </div>
</div>

@endsection