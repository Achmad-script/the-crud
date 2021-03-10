<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;
class ProductController extends Controller
{
    Public Function index(){
    	return view('index');
    }
    
    Public Function create(){
        $category = Category::all();
        return view('create', compact('category'));
    }

    Public Function store(Request $request){

        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required'
        ]);
    	Product::create($request->all());
        return redirect('/product');
    }

    Public Function ViewProduct(){
        $product = Product::all();
    	return view('product', ['product' => $product]);
    }

    Public Function edit($id){
    $product = Product::findOrFail($id);
        return view('edit',compact('product'));
    }

    Public Function update(Request $request, $id){
        Product::findOrFail($id)->update($request->all());
        return redirect('/product');

    }

    Public Function delete($id){

        Product::destroy($id);
        return back();
    }
}
