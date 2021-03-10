@extends('template.template')
@section('title', 'Product')
@section('content')


          <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Product Name</th>
                     <th>Category</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach($product as $fck)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $fck->nama_produk }}</td>
                    <td>{{ $fck->category->nama_kategori }}</td>
                    <td>{{ $fck->harga }}</td>
                    <td>{{ $fck->stok }}</td>
                   
                    <td>
                        <a href="/product/edit/{{ $fck->id }}" class="btn btn-success">Edit</a>
                         <a href="/product/delete/{{ $fck->id }}" class="btn btn-danger">Delete</a>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endsection