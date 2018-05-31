<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{


	public function index()
	{
		return view('gallery.main');
	}

	public function view($album){
		if ($album == 'cats'){
			return view('gallery.cats');
		}

		if ($album == 'traveling'){
			return view('gallery.traveling');
		}
	}

	public function show($album, $sub_album){
		if ($album == 'cats'){
			if($sub_album == "simba"){
				return view('gallery.simba');
			}
			if($sub_album == "oreo"){
				return view('gallery.oreo');
			}

		}


	}






}
