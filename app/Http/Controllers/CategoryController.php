<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Category;
use DB;

class CategoryController extends Controller
{
    public function Category(Request  $request){

    	if($request->isMethod('post')){
    		$data = $request->all();
    		$category = new category;
    		$category->name         = $data        ['name'];
    		$category->paren_id     = $data    ['paren_id'];
    		$category->url          = $data         ['url'];
    		$category->description  = $data ['description'];
    		$category->save();
    	return redirect(url('/admin/Category'))->with('messageSMG','Category has been save');
    }

    	$levels=category::where(['paren_id'=>0])->get();

    	return view('layouts/Category/category')->with(compact('levels')); 

    }

    public function ViewCategory(){
        $category = Category::all();
        return view ('layouts/Category/CategoryView',compact('category'));
    

    }

    public function CategoryEdit($id){
        //$Category_Edit =  Category::all();
        //dump($Category);
         $Category_Edit =  DB::select("select * from categories where id =  '$id' ");
         $level = Category::where(['paren_id'=>0])->get();
         return view ('layouts/Category/CategoryEdit',compact('Category_Edit','level'));
    }

    public function CategoryUpdate(Request $request,$id=null){
        
      if($request->isMethod('post')){
            $data = $request->all();
            Category::where(['id'=>$id])->update([
            'name'        => $data ['name'],
            'paren_id'    => $data ['paren_id'],
            'description' => $data ['description'],
            'url'         => $data ['url']
           
        ]);

        return redirect(url('/admin/Category-View'))->with('messageSMG','Category has been Update');
        
        }
        //----No use zero---//
        //$categoryDetail = Category::where(['id'=>$id])->first();
        //return view ('layouts/product/CategoryEdit',compact('categoryDetail'));


    }

        public function CategoryDelete($id){
        Category::where('id',$id)->delete();
        return back()->with('messageSMG2','Delete Successfuly');

        }
    
       public function EnableStatus($id){

           $status=Category::find($id);
                $status->Status=!$status->Status;
                if($status->save()){
                   return back()->with('messageSMG','Status Disable');
                }else{
                    return back()->with('messageSMG','Status Enable');

                }

           }
           public function DisableStatus($id){
                    $status=Category::find($id);
                    $status->Status=!$status->Status;
                    if($status->save()){
                    return back()->with('messageSMG2','Status Enable');
           }else{
            return back()->with('messageSMG2','Status Disable');

           }
       }
      
}

    