<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class FooterController extends Controller
{
    public function AllFooter()
    {
        $footer = Footer::first();
        return view('backend.footer.view', compact('footer'));
    }//End method

    public function AddFooter()
    {
        return view('backend.footer.add');
    }//End Method

    public function StoreFooter(Request $request)
    {
        $image = $request->file('footer_logo');
        $image_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(80, 80)->save('upload/footer/'.$image_name);
        $save_image = 'upload/footer/'.$image_name;

        Footer::insert([
            'footer_logo' => $save_image,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'details' => $request->details,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('all.footer')->with('message', ' Footer Data Added Successfully');

    }//End Method

    public function EditFooter($id)
    {
        $item = Footer::find($id);
        return view('backend.footer.edit', compact('item'));
    }//End Method

    public function UpdateFooter(Request $request, $id)
    {
        $data = Footer::find($id);

        if ($request->file('footer_logo')) {
            unlink($data->footer_logo);
            $image = $request->file('footer_logo');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(80, 80)->save('upload/footer/' . $image_name);
            $save_image = 'upload/footer/' . $image_name;

            Footer::findOrFail($id)->update([
                'footer_logo' => $save_image,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'details' => $request->details,
            ]);
            return redirect()->route('all.footer')->with('message', ' Footer Data Updated Successfully');

        } else {
            Footer::findOrFail($id)->update([
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'details' => $request->details,
            ]);
            return redirect()->route('all.footer')->with('message', ' Footer Data Updated Successfully');
        }

    }//End Method
}
