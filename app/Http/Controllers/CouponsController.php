<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Coupon;
class CouponsController extends Controller
{
    public function addCoupon(Request $reques){
        if($reques->isMethod('post')){
            $data = $reques->all(); 
            $coupon =  new Coupon;
            $coupon->coupon_code = $data['coupon_code'];
            $coupon->amount      = $data['amount'];
            $coupon->amount_type = $data['amount_type'];
            $coupon->Expire_Date = $data['Expire_Date'];
            $coupon->save();
        return redirect()->back()->with('messageSMG', 'Coupong hash been to add');
            
      
        }

        return view('Admin.coupons.Add_coupon')->with('messageSMG', 'Coupon hash been to save');
    }
    public function ViewCoupon(){
        $coupon = Coupon::get();
        return view('Admin.coupons.View_coupon')->with(compact('coupon'));
    }
    public function updateStatus($id){
        $status=Coupon::find($id);
        $status->status=!$status->status;
        if($status->save()){
        return redirect(url('/Admin/View-coupon'))->with('messageSMG', 'Status Disabled');
        }
        

    }
    public function statEnable($id){
        $status = Coupon::find($id);
        $status->status=!$status->status;
        if ($status->save()) {
        return redirect(url('/Admin/View-coupon'))->with('messageSMG', 'Status Disabled');
        }
    }
}
