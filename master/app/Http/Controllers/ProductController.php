<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Category;
use App\Gallery;

class ProductController extends Controller
{
   public function getProductByType($id)
   {	
   		$category = Category::getTypeById($id);
   		$product = Product::getProductByType($id);
    	return view('page.product')->with(['product'=>$product,'category'=>$category]);
   }

   public function getDetail($id)
   {	
   		$product = Product::getDetail($id);
   		$gallery = Gallery::getGallery($id);
    	return view('page.detail')->with(['product'=>$product,'gallery'=>$gallery]);
   }
}
