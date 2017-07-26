<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    protected $table='products';
    public function type_products(){
    	return $this->belongsTo('App\TypeProduct','id_type','id');
    }
    public function bill(){
    	return $this->hasManyThrough('App\Bill','App\BillDetail','id_product','id');
    }


    public static function getProductByType($idType){
        $product = DB::table('products')
                        ->where('id_type',$idType)
                        ->get();
        return $product;
    }

    public static function getDetail($id){
        $product = DB::table('products')
                    ->where('id',$id)
                    ->get();
        return $product;
    }

    public static function hotProduct()// tim san pham SAT noi bat
    {
    	$hotPro = DB::table('products')
    				->where('view','>','9');
            return $hotPro;

    }
    //hiện tất cả các sản phẩm
    public static function Show_Product_All(){
            $product=DB::table('products')
                        ->join('category','products.id_type','=','category.id')
                        ->select('category.name as type_name','products.id','products.name','products.unit_price', 
                                 'products.promotion_price','products.image','products.unit','products.created_at',
                                 'products.updated_at','products.description');
        return $product;
  }
  //Tim sàn phẩm theo loại
    public static function Find_Product_By_Type($id){
        $product=DB::table('products')->where('id_type','=',$id);
        return $product;
    }
    //Xóa sản phẩm theo id
    public static function Find_Product_By_Id($id){
        $product=DB::table('products')->where('id','=',$id)->delete();
        return $product;
    }
    //Các sản phẩm có lượng view nhiều nhất
    public static function MostViewProduct(){
        $product=array();
        $product_view=DB::table('products')->select()->orderBy('view','DESC')->limit(5)->get();
        $total_view=DB::table('products')->sum('view');
        $product[0]=$product_view;
        $product[1]=$total_view;
        return $product;
    }

    public static function Edit_Product($id, $name, $type, $desc, $unit_price, $pro_price,$image,$unit){
            $pro=DB::table('products')->where('id','=',$id)->update(['name'=>$name,'id_type'=>$type, 'description'=>$desc,'unit_price'=>$unit_price,'promotion_price'=>$pro_price,'image'=>$image,'unit'=>$unit]);
            return $pro; 
  }
  public static function Insert_Product($name, $type, $desc, $unit_price, $pro_price, $image, $unit){
            $id=DB::table('products')->insertGetId(['name'=>$name,'id_type'=>$type,'description'=>$desc,'unit_price'=>$unit_price,'promotion_price'=>$pro_price,'image'=>$image, 'unit'=>$unit]);
            return $id;
  }
  public static function Delete_Product($id){
        $pro=DB::table('products')->where('id','=',$id)->delete();
        return $pro;
  }

      public static function findProductBestSale() // tim san pham ban chay
        {
            $bestsale = DB::table('bill_detail')->join('products','bill_detail.id_product','=','products.id')
                            ->select(DB::raw('sum(quantity) as quan'),'products.id','products.name','products.unit_price','products.promotion_price','products.image')
                            ->groupBy('products.name','products.id','products.unit_price','products.promotion_price','products.image')
                            ->orderBy('quantity','DESC')
                            ->limit(2);

            return $bestsale;
        }
    public static function findOneProduct($id)
    {
        $productcart = DB::table('products')
                    ->where('products.id','=',$id)
                    ->first();
        return $productcart;

    }

    public static function findProductPromotion()
    {
        $products = DB::table('products')->where('promotion_price','>','0')
                                        ->limit(8);
        return $products;
    }
}
