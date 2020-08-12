<?php

use App\Post;
namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Product_db;
use\App\Category;
use\App\attiribute;
use\App\product_image;
use Session;
use DB;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product(){
      $Category =  Category::all();
    	return view('layouts.product.product',compact('Category'));
    }

  public function ProductSave(Request $request){

      $product =  new Product_db();
      $request->validate([

      'category_id'    => 'required',
      'name'           => 'required',
      'code'           => 'required',
      'color'          => 'required',
      'description'    => 'required',
      'price'          => 'required',



      ]);


            if ($request->hasFile('image')) {
                $this->validate($request, [
                 'image'=>  'required|image|mimes:jpeg,png,jpg',
                ]);
                $file = $request->image;
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $name = $timestamp . '-' . $file->getClientOriginalName();
                $product->image = $name;
                $file->move(public_path('/upload/'), $name);
            }

              $product->category_id = $request->category_id;
              $product->name        = $request->name;
              $product->code        = $request->code;
              $product->color       = $request->color;
              $product->description = $request->description;
              $product->price       = $request->price;
              $product->save();
              //return back()->with('messageSMG','Data has been save');
              return redirect(url('/admin/Product_View'))->with('messageSMG','Add Successfully!!');


             }


    public function ProductView(){

        $product = Product_db::all();
        return view('layouts/product/product_view',compact('product'));
    }

    public function productEdit($id){
        $Category =  Category::all();
        $product_edit =  DB::select("select * from Product_dbs where id =  '$id' ");
        return view('layouts/product/productEdit',compact('product_edit','Category'));
    }

    public function ProductUpdate(Request $request,$id){

        $product = Product_db::find($id);
        $request->validate([

        'category_id' => 'required',
        'name'        => 'required',
        'code'        => 'required',
        'color'       => 'required',
        'description' => 'required',
        'price'       => 'required',

        ]);


       if ($request->hasFile('image')) {
                $this->validate($request, [
                 'image'=>  'required|image|mimes:jpeg,png,jpg',
                ]);
                $file = $request->image;
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $name = $timestamp . '-' . $file->getClientOriginalName();
                $product->image = $name;
                $file->move(public_path('/upload/'), $name);
            }

                $product->name        = $request->name;
                $product->category_id = $request->category_id;
                $product->code        = $request->code;
                $product->color       = $request->color;
                $product->description = $request->description;
                $product->price       = $request->price;
                $product->update();
                //return back()->with('messageSMG','Update has been Successfuly');
                return redirect(url('/admin/Product_View'))->with('messageSMG','Update Successfully!!');


                }


                public function destroy($id){
                Product_db::where('id',$id)->delete();
                //$product = Product_db::find($id);

                  return redirect(url('/admin/Product_View'))->with('messageSMG2','Delete Successfully!!');


                }

                public function UpdateStatus($id){

                 //return $status =Product_db::find($id);
                $status=Product_db::find($id);
                $status->Status=!$status->Status;
                if($status->save()){
                return redirect(url('/admin/Product_View'))->with('messageSMG','Status Enable');
                }

                }

                public function statEnable($id){

                $status=Product_db::find($id);
                $status->Status=!$status->Status;
                if($status->save()){
                return redirect(url('/admin/Product_View'))->with('messageSMG2','Status Disabled');
                
                }

              }

                // -------------Product-------------------//

              public function productControll($id=null){
                $productDetails = Product_db::with('attributes')->where('id',$id)->first();
                $productImage = product_image::where('product_id',$id)->get();
                $fealturproduct=Product_db::where(['fealtured_products'=>0])->get(); 
                



                return view('wayshop/product_detail')->with(compact('productDetails','productImage','fealturproduct'));

              }


              public function Attribucte( Request $request,$id=null){
                
               $productDetails=Product_db::with('attributes')->where('id',$id)->first();
              

                  if($request->isMethod('post')){
                  $data = $request->all();
                  foreach ($data['sku'] as $key => $val){
                  if (!empty($val)) {

                        $attritubeSKU = attiribute::where('sku',$val)->count();
                      if($attritubeSKU>0){
                       // return redirect('Attribute/Add_attributes'.$id)->with('messageSMG','Attributes hash been arready exits selct onother sku');
                         return redirect()->back()->with('messageSMG','Attributes hash been arready exits selct onother sku');
                      }

                      $attritubsize = attiribute::where(['product_id'=>$id, 'size'=>$data['size']

                    [$key]])->count();

                       if($attritubsize>0){
                        return redirect()->back()->with('messageSMG','Attributes hash been arready exits selct onother Size');
                      
                      }


                      $Attributes= new attiribute;
                      $Attributes->product_id = $id;
                      $Attributes->sku   = $val;
                      $Attributes->size  = $data['size'][$key]; 
                      $Attributes->price = $data['price'][$key]; 
                      $Attributes->stock = $data['stock'][$key]; 
                      $Attributes->save();

                  }

                }

             return redirect()->back()->with('messageSMG','Product Attribute hass been Save');
              
              }


              return view('layouts/Attributes/Add_attributes')->with(compact('productDetails'));

              }

              public function DeleteAttribute($id=null){

                attiribute::where(['id'=>$id])->delete();
                return redirect()->back()->with('messageSMG','Product Attribute hass been delete');

              }

              public function EditAttribute(Request $request,$id=null){

                if($request->isMethod('post')){
                  $data = $request->all();
                  foreach ($data['attr'] as $key => $attr) {

                    attiribute::where(['id'=>$data['attr'][$key]])->update([
                      
                      'sku'   =>$data   ['sku'][$key],
                      'price' =>$data ['price'][$key],
                      'size'  =>$data  ['size'][$key],
                      'stock' =>$data ['stock'][$key]
                  ]);
                    
                  }

                 }

                return redirect()->back()->with('messageSMG', 'Product Attribute hass been Update');
             
              }

              public function imageAttribute(Request $request,$id=null){
                $productDetails = Product_db::where(['id'=>$id])->first();


                if($request->isMethod('post')){
                $data=$request->all();
                if($request->hasFile('image')){
                  $files = $request->file('image');
                  foreach($files as $file){
                    $image = new product_image;
                    $extension = $file->getClientOriginalExtension();
                    $filename =  rand(111,9999).'.'.$extension;
                    $image_path = 'uploads/products/'.$filename;
                    Image::make($file)->save($image_path);
                    $image->image = $filename;
                    $image->product_id = $data['product_id'];
                    $image->save();

                    }
                  }
                   return redirect()->back()->with('messageSMG', 'Image hash been to save');

                }

                $productImage = product_image::where(['product_id'=>$id])->get();
                return view('layouts/Attributes/add_image')->with(compact('productDetails','productImage')); 
              }


              public function imageDelete($id=null){
              $productImages = product_image::where(['id'=>$id])->first();

              $image_path = 'uploads/products';
              if(file_exists($image_path.$productImages->image)){
                unlink($image_path.$productImages->image);
              
              }               
                product_image::where(['id'=>$id])->delete();
                //Alert::success('Delete','success messageSMG');
                return redirect()->back()->with('messageSMG', 'Image hash been Delete');
              }

                public function fearturdProduct($id=null){

                 //return $status =Product_db::find($id);
                $fealtur=Product_db::find($id);
                $fealtur->fealtured_products=!$fealtur->fealtured_products;
                if($fealtur->save()){
                return redirect(url('/admin/Product_View'))->with('messageSMG','Fealtur Enable');
                }
              }

                 public function fearturdDisable($id=null){

                 //return $status =Product_db::find($id);
                $fealtur=Product_db::find($id);
                $fealtur->fealtured_products=!$fealtur->fealtured_products;
                if($fealtur->save()){
                return redirect(url('/admin/Product_View'))->with('messageSMG2','Fealtur Disabled');
                }
              }
              
              public function getPrice(Request $request){

                $data = $request->all();
                //print_r($data);
                $proArr = explode("-",$data['idSize']);
                $proAttr=attiribute::where(['product_id'=>$proArr[0],'size'=>$proArr[1]])->first();
                echo $proAttr->price;


              }



              public function AddCart(Request $request){
              //echo "<bre>";print_r($data);die; 

              $data = $request->all();
              if(empty($data['session_id'])){
                $data['user_email']='';
              }
              $session_id = Session::get('session_id');
             if (empty($data['session_id'])) {
              $session_id = str_random(40);
              Session::put('session_id', $session_id);
              
              //$data['session_id']='';

              }
              
              $sizeArr = explode('-',$data['size']);
             
                DB::table('addcarts')->insert([
                  'product_id'    =>$data   ['product_id'],
                  'product_name'  =>$data   ['product_name'],
                  'product_code'  =>$data   ['product_code'],
                  'product_name'  =>$data   ['product_name'],
                  'product_color' =>$data   ['product_color'],
                  //'size'        =>$sizeArr[1],
                  'size'          =>$data   ['size'],
                  'price'         =>$data   ['price'],
                  'quatity'       =>$data   ['quatity'],
                  'session_id'    =>$session_id,
                  'user_email'    =>$data   ['user_email']
                ]);
                return redirect("/cart")->with('messageSMG','Product has been added in cart');

              }

              public function Cart(Request $request,$id=null){
                $session_id = Session::get('session_id');
                $userCart = DB::table('addcarts')->where(['session_id'=>$session_id])->get();
                
                foreach($userCart as $key=>$products){
                $productDetail = Product_db::where(['id'=>$products->product_id])->first();
                $userCart[$key]->image =  $productDetail->image; 

                }
                //echo"<bre>";print_r($userCart);die;
                return view('wayshop.product.cart')->with(compact('userCart')); 

              }
              public function DeleteCart($id=null){
                //echo $id;die;
                DB::table('addcarts')->where('id',$id)->delete();
                return redirect('/cart')->with('messageSMG','Product has been to delete.');

              }
              public function updateQuatity($id=null, $quatity=null){
                DB::table ('addcarts')->where ('id',$id)->increment('quatity', $quatity);
                return redirect('/cart')->with('messageSMG','Product Quatity has been Update');
              }

            }
