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
                                    <th>ID</th>
                                    <th>Kd Trans</th>
                                    <th>Customer</th>
                                    <th>Kd Name</th>
                                    <th>Item Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        @forelse ($chartproducts as $item)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $item->kdtrans }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->kdproduk }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td align="">{{ $item->qty }}</td>
                                                <td align="right">{{ number_format($item->price) }}</td>
                                                <td align="right">{{ number_format($item->total) }}</td>
                                            </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan='8'>Data tidak ditemukan</td>
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