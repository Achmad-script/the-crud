<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="categories";
	
    protected $fillable = ['nama_kategori'];

    	public function product() {
    	return $this->hasMany('App\Product');
    }
     
}
