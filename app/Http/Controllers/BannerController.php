<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use\App\Banner;
use DB;

class BannerController extends Controller
{
     public function Banner(){
    	$bannerDetails = Banner::get();
    	return view('layouts.banner.banner',compact('bannerDetails'));

    }

     public function AddBanner(Request $request){
    	if($request->isMethod('post')){

    		$data = $request->all();
    		$banner =  new Banner;
    		//dump($banner);
    		$banner->name       = $data ['name'];
    		$banner->text_style = $data ['text_style'];
    		$banner->sort_order = $data ['sort_order'];
    		$banner->content    = $data ['content'];
    		$banner->link       = $data ['link'];

    		//upload image
            if ($request->hasFile('image')) {
                $this->validate($request, [
                 'image'=>  'required|image|mimes:jpeg,png,jpg',
                ]);
                $file = $request->image;
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $name = $timestamp . '-' . $file->getClientOriginalName();
                $banner->image = $name;
                $file->move(public_path('/banner/'), $name);
                
    		}
    		$banner->save();
    		return redirect(url('/Admin-bannser-view'))->with('messageSMG','Add Successfully!!');

        	}

    	   return view('layouts/banner/AddBanner');
    	
        }
            public function EditBanner($id){
            
             $BannerEdit =  DB::select("select * from Banners where id =  '$id' ");   
            //$BannerEdit = Banner::where(['id'=>$id])->first();
            return view('layouts/banner/EditBanner',compact('BannerEdit'));  
        }


           public function BannerUpdate(Request $request,$id){
          
          $banner = Banner::find($id);
          $request->validate([

            'name'          => 'required',
            'text_style'    => 'required',
            'sort_order'    => 'required',
            'content'       => 'required',
            'link'          => 'required',

          ]);

              if ($request->hasFile('image')) {
                $this->validate($request, [
                 'image'=>  'required|image|mimes:jpeg,png,jpg',
                ]);
                $file = $request->image;
                $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
                $name = $timestamp . '-' . $file->getClientOriginalName();
                $banner->image = $name;
                $file->move(public_path('/banner/'), $name);
             }


                $banner->name       =$request->name;
                $banner->text_style =$request->text_style;
                $banner->sort_order =$request->sort_order;
                $banner->content    =$request->content;
                $banner->link       =$request->link;
                $banner->update();

                return redirect(url('/Admin-bannser-view'))->with('messageSMG','Update Successfully!!');

                }

                public function BannerDelete($id){
                Banner::where('id',$id)->delete();
                return redirect(url('/Admin-bannser-view'))->with('messageSMG','Delete Successfully!!');

                }

                public function BannerStatus($id){
                $status=Banner::find($id);
                $status->status=!$status->status;
                if($status->save()){
                return redirect(url('/Admin-bannser-view'))->with('messageSMG','Status Enable');
                
                }
            }

                public function BannerStatusdisable($id){
                $status=Banner::find($id);
                $status->status=!$status->status;
                if($status->save()){
                return redirect(url('/Admin-bannser-view'))->with('messageSMG','Status Disable');
                }
            }
         }