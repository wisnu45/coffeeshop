@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="row col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Profil</h2>

                    </div>
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="basic-data-table">  
                            <table id="basic-data-table" class="table nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Deskripsi</th>
                                        <th>Path</th>
                                        <th>Publish ?</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($profils as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td><img src="{{ asset('storage/profil/'.$item->path.'')}}" height="128" width="128"> </td>
                                                <td>
                                                    @if($item->stat_publish =='0')
                                                        
                                                        <a href="{{ url('admin/profils/publish/'.$item->id) }}" class="btn btn-warning btn-x5">PUBLISH</a>
                                                    
                                                    @else
                                                    
                                                        <a href="{{ url('admin/profils/unpublish/'.$item->id) }}" class="btn btn-warning btn-x5">UNPUBLISH</a>
                                                    
                                                    @endif

                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/profils/hapus/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">DELETE</a>
                                                        <a href="{{ url('admin/profils/edit/'.$item->id) }}" class="btn btn-success btn-x5">EDIT</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan='5'>Data tidak ditemukan</td>
                                            </tr>
                                        @endforelse
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('admin/profils/create') }}" class="btn btn-primary">Add Profil</a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection