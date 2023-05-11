<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShipCountry;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ShipCountryController extends Controller
{
    public function ViewCountry()
    {
        $countries = ShipCountry::latest()->get();
        return view('backend.shipcountry.view', compact('countries'));
    }//End Method

    public function AddCountry()
    {
        return view('backend.shipcountry.add');
    }//End Method


    public function CountryStore(Request $request)
    {
        $request->validate([
            'country_name' => 'required | unique:ship_countries,country_name',
        ]);

        ShipCountry::insert([
            'country_name' => $request->country_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Shipping Country Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.country')->with($notification);
    }//End Method

    public function EditCountry($id)
    {
        $country = ShipCountry::findOrFail($id);
        return view('backend.shipcountry.edit', compact('country'));
    }//End Method

    public function UpdateCountry(Request $request, $id)
    {
        $request->validate([
            'country_name' => 'unique:ship_countries,country_name'.($id ? ",$id" : '')
        ]);

        ShipCountry::findOrFail($id)->update([
            'country_name' => $request->country_name,
        ]);

        $notification = array(
            'message' => 'Shipping Country Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.country')->with($notification);

    }//End Method


    public function DeleteCountry($id){
    	ShipCountry::findOrFail($id)->delete();
    	$notification = array(
			'message' => 'Country Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);
    }


}
