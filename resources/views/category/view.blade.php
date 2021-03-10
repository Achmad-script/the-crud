@extends('template.template')
@section('title', 'Category')
@section('content')

  <h1>Category List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($category as $btch)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $btch->nama_kategori }}</td>
                    <td>
                         <a href="/category/delete/{{ $btch->id }}" class="btn btn-danger">Delete</a>   
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>

        @endsection