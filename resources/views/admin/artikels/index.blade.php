@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="row col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Artikel</h2>

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
                                        <th>Header</th>
                                        <th>Deskripsi</th>
                                        <th>Publish ?</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($artikels as $item)
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->header }}</td>
                                                <td>{{ substr($item->deskripsi,0,30) }}</td>
                                                <td>
                                                    @if($item->stat_publish =='0')
                                                        
                                                        <a href="{{ url('admin/artikels/publish/'.$item->id) }}" class="btn btn-warning btn-x5">PUBLISH</a>
                                                    
                                                    @else
                                                    
                                                        <a href="{{ url('admin/artikels/unpublish/'.$item->id) }}" class="btn btn-warning btn-x5">UNPUBLISH</a>
                                                    
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/artikels/hapus/'.$item->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure ?')">DELETE</a>
                                                        <a href="{{ url('admin/artikels/edit/'.$item->id) }}" class="btn btn-success btn-x5">EDIT</a>
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
                        <a href="{{ url('admin/artikels/create') }}" class="btn btn-primary">Add Artikel</a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection