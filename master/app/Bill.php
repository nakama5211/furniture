<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Bill extends Model
{
    protected $table='bills';

    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','id_bill','id');
    }
    public static function bill(){
    	$bill=DB::table('bills ')->select();
    	return $bill;
    }

}
