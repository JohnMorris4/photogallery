<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
	//Show create form
	public function create(){
		die('PHOTO/CREATE');
	}

	//Store Photo
	public function store(Request $request){
		die('PHOTO/store');
	}

	//Show Photo Details
	public function details($id){
		die($id);
	}
}
