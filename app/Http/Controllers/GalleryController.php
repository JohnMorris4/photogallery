<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    //List Galleries
	public function index(){
		die('Gallery/Index');
	}

	//Show create form
	public function create(){
		die('GALLERY/CREATE');
	}

	//Store Function
	public function store(Request $request){
		die('gallery/store');
	}

	//Show function
	public function show($id){
		die($id);
	}
}
