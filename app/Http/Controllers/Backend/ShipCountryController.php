<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShipCountry;
use App\Models\ShipState;
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


    public function StoreCountry(Request $request)
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
            'country_name' => 'unique:ship_countries,country_name'.$id,
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
    }//End Method


    ////////////State Functions Start////////////


    public function ViewState()
    {
        $states = ShipState::latest()->get();
        return view('backend.shipstate.view', compact('states'));
    }//End Method

    public function AddState()
    {
        $countries = ShipCountry::latest()->get();
        return view('backend.shipstate.add', compact('countries'));
    }//End Method


    public function StoreState(Request $request)
    {
        ShipState::insert([
            'shipcountry_id' => $request->shipcountry_id,
            'shipstate_name' => $request->shipstate_name,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Shipping state Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.state')->with($notification);
    }//End Method

    public function EditState($id)
    {
        $countries = ShipCountry::latest()->get();
        $state = ShipState::findOrFail($id);
        return view('backend.shipstate.edit', compact('countries', 'state'));
    }//End Method

    public function UpdateState(Request $request, $id)
    {
        ShipState::findOrFail($id)->update([
            'shipcountry_id' => $request->shipcountry_id,
            'shipstate_name' => $request->shipstate_name,
        ]);

        $notification = array(
            'message' => 'Shipping State Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.state')->with($notification);

    }//End Method


    public function DeleteState($id){
    	ShipState::findOrFail($id)->delete();
    	$notification = array(
			'message' => 'State Deleted Successfully',
			'alert-type' => 'info'
		);

		return redirect()->back()->with($notification);
    }//End Method


}
