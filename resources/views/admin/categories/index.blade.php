@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="row col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Kategori</h2>

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
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($categories as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/categories/hapus/'.$item->id) }}" class="btn btn-danger">DELETE</a>
                                                        <a href="{{ url('admin/categories/edit/'.$item->id) }}" class="btn btn-success btn-x5">EDIT</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan='3'>Data tidak ditemukan</td>
                                            </tr>
                                        @endforelse
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ url('admin/categories/create') }}" class="btn btn-primary">Add New</a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection