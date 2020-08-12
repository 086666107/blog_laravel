<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;

class AdminControlller extends Controller
{
    public function login(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->input();
    		if(Auth::attempt([
                'email'    =>$data['username'],
                'password' =>$data['password']
                ]))
            {
    			return redirect('admin/dashboard');
    		}else{
    			return redirect('/admin')->with('messageSMG','Invalid Username and password');
    			}    
    		}
    		
    			return view('admin.Admin_login');

    		}

    			public function dashboard(){

    			return view ('Admin.dashboard');
   	 		}
            

        public function logout(){
            Session::flush();
            return redirect ('/admin')->with('messageSMG','Loge out successfull!'); 

        }

	}
