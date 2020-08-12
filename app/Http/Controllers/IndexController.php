<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Banner;
use\App\Category;
use\App\product_db;
class IndexController extends Controller
{
	public function index(){
		$banners = Banner::where('status','0')->orderby('sort_order','asc')->get();
  		$categories=Category::with('categories')->where(['paren_id'=>0])->get();
  		$product = product_db::get();

  		return view('wayshop.index')->with(compact('banners','categories','product'));
 
   }
   public function categoryid($category_id){
   	
   	$categories = Category::with('categories')->where(['paren_id'=>0])->get();
   	$product= product_db::where(['category_id'=>$category_id])->get();
   	$product_name = product_db::where(['category_id'=>$category_id])->first();
   	return view('wayshop/category')->with(compact('categories','product','product_name'));
   }


}
