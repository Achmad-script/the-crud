@extends('template.template')
@section('title', 'Product | Edit')
@section('content')
    <div class="container mt-5" style="width: 44%;">
       
        <form class="mb-4" action="{{ url('/product/update/'. $product->id)}}" method="POST">
            @method('patch')
            {{ csrf_field() }}
            
            <h1 class="text-center mb-4">Edit Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" required="required" name="nama_produk" value="{{ $product->nama_produk }}">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control" required="required"  name="harga" value="{{ $product->harga }}">
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control" required="required"   name="stok" value="{{ $product->stok }}">
            </div>
            <input type="submit" id="btn-submit" class="btn btn-primary mt-3"value ="Update">
        </form>
       
    </div>
<script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
<script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>
</html>