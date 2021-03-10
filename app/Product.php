<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	protected $table ="product";
	
    protected $fillable = ['nama_produk','id_ketegori','harga','stok'];


    public function category() {
    	return $this->belongsTo('App\Category','id_ketegori');
    }
}
