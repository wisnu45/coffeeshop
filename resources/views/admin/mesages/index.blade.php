@extends('admin.layout')

@section('content')
    <div class="content">
        <div class="row">
            <div class="row col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Mesage</h2>

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
                                        <th>Email</th>
                                        <th>Deskripsi</th>
                                        <th>Create</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($mesages as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>
                                                {{ $item->pesan }}
                                                </td>
                                                <td>
                                                {{ $item->created_at }}
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
                </div>
            </div>
        </div>
        

    </div>
@endsection