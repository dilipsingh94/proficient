<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Image;
use Session;

class ImageController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function upload_image() {
        return view('upload');
    }

    public function table_image() {
        $data = Image::all();
        // return $data;
        return view('table', compact('data'));
    }

    public function upload_store (Request $request) {
        $this->validate(request(), [
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $shipper = new Image();
        $shipper->title=$request->title;
        $shipper->description=$request->description;

        if($request->hasFile('image')){
            $shipperadhaarfile = $request->image;
            $filename = date('YmdHis').'.'.$shipperadhaarfile->getClientOriginalExtension();
            $path = '/images/';
            $shipperadhaarfile->move(storage_path('app/public/').$path, $filename);
            $shipper->image = '/storage'.$path.$filename;
        }else{
            $shipper->image = 'no image';
        }
        
        $shipper->save();

        Session::flash('success', 'Image Uploaded successfully...!');

        return redirect()->route('images');
    }

    public function delete($id) {
        $post = Image::find($id);
        $post->delete();
        Session::flash('success', 'Image Deleted Successfully...!');
        return redirect()->route('images');
    }
}


