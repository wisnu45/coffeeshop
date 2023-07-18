@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="row col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Users</h2>

                    </div>

                    <div class="card-body">
                    <div class="basic-data-table">  
                            <table id="basic-data-table" class="table nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($products as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $item->name }}</td>
                                                
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->almt }}<br{{ $item->nohp }}></td>
                                                <td><a href="{{ url('admin/products/edit/'.$item->id) }}" class="btn btn-success">EDIT</a>&nbsp;<a href="" class="btn btn-danger">HAPUS</a>&nbsp;
                                            </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan='7'>Data tidak ditemukan</td>
                                            </tr>
                                        @endforelse
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
@endsection