<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use DB;
class CategoryController extends Controller
{
     Public Function index(){
    	return view('index');
    }
    
    Public Function form(){
        return view('category.create');
    }

    Public Function store(Request $request){
    	Category::create([
    		'nama_kategori'=>$request->nama_kategori
    		
    	]);
    	return redirect('/category');
    }

     Public Function ViewCategory(){
         $category = DB::table('categories')->get();

        return view('category.view', ['category' => $category]);

    }

    Public Function delete($id){

        Category::destroy($id);
        return back();
    }

}
