@extends('template.template')
@section('title', 'Product | Input')
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        <h3>Wajib Diisi Kaya Pahala lu! </h3>
        @foreach ($errors->all() as $error)

        <li>

        {{$error}}</li>

        @endforeach
    </ul>
</div>
@endif
        
           <div class="container mt-5" style="width: 44%;">
        <form class="mb-4" action="/store" method="POST">
            @csrf
            <h1 class="text-center mb-4">Create Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control"name="nama_produk">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="id_ketegori">
                    <option>
                        -- Pilih Kategori --
                    </option>
                 @foreach($category as $fckr)
                <option value="{{ $fckr->id }}" name="id_ketegori">
                    {{$fckr->nama_kategori}}
                </option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control" name="stok">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    @endsection