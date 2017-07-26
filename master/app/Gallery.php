<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Gallery extends Model
{
    protected $table='gallery';
    public function products(){
    	return $this->belongsTo('App\Gallery','id_product','id');
    }

    public static function getGallery($id){
        $gallery = DB::table('gallery')
        			->where('id_product',$id)
                    ->get();
        return $gallery;
    }
}
