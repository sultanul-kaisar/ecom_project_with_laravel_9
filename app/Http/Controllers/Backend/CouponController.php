<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use Illuminate\Support\Carbon;

class CouponController extends Controller
{
    public function ViewCoupon(){
    	$coupons = Coupon::orderBy('id','DESC')->get();
    	return view('backend.coupon.view',compact('coupons'));

    }//End Method

    public function AddCoupon()
    {
        return view('backend.coupon.add');
    }//End Method

    public function CouponStore(Request $request){

    	$request->validate([
    		'coupon_name' => 'required',
    		'coupon_discount' => 'required',
    		'coupon_validity' => 'required',

    	]);



        Coupon::insert([
            'coupon_name' => strtoupper($request->coupon_name),
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at' => Carbon::now(),

            ]);

            $notification = array(
                'message' => 'Coupon Inserted Successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('manage.coupon')->with($notification);

    } // end method


    public function EditCoupon($id){
        $coupons = Coupon::findOrFail($id);
        return view('backend.coupon.edit',compact('coupons'));
    }//End Method


    public function UpdateCoupon(Request $request, $id){

        Coupon::findOrFail($id)->update([
          'coupon_name' => strtoupper($request->coupon_name),
          'coupon_discount' => $request->coupon_discount,
          'coupon_validity' => $request->coupon_validity,
          'created_at' => Carbon::now(),

          ]);

          $notification = array(
              'message' => 'Coupon Updated Successfully',
              'alert-type' => 'info'
          );

          return redirect()->route('manage.coupon')->with($notification);
    } // end mehtod

    public function DeleteCoupon($id){
    	Coupon::findOrFail($id)->delete();
    	$notification = array(
			'message' => 'Coupon Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);

    }


}
