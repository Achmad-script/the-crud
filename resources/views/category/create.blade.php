@extends('template.template')
@section('title', 'Category | Input')
@section('content')
    <div class="container mt-5" style="width: 44%;">
        <form class="mb-4" action="/category/store" method="POST">
            @csrf
            <h1 class="text-center mb-4">Create Category</h1>
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="nama_kategori">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    @endsection