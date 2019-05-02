<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class imageController extends Controller
{
	public function index(request $request)
	{
		$image = new \App\image;
		$image->image = $request->image;
		$image->author = $request->author;

		// if ($image->author) {
			$filename = time().file('image')->getClientOriginalName();
			$image->author->move(public_path().'/images/',$filename);
			$image->image = $filename;
		// }

		$image->save();

		return $image;

	}

	public function store(request $request)
	{

		$path = $request->file('profile_image')->store('public');
		
		$image = new \App\image;
		$image->image = $path;
		$image->author = $request->author_name;
		$image->photo_name = $request->photo_name;
		$image->description = $request->description;

		$image->save();

		return redirect()->back()->with('message','image uploaded successfully');
    }


    public function gallery()
    {
    	$images = \App\image::all();
    	return view('chitrokor.Gallery',compact('images'));
    }

        public function retrive()
    {
    	$images = \App\image::find(11);
    	$content =  Storage::get($images->image);
    	return $content;
    }



        public function blog()
    {
    	$images = \App\image::all();
    	return view('chitrokor.blog',compact('images'));
    }

}


