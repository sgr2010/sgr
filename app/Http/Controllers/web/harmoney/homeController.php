<?php

namespace App\Http\Controllers\web\harmoney;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    //

	public function index()
	{
		return view('harmoney/home.twig');
	}

	public function contactus()
	{
		return view('harmoney/contactus.twig');	
	}


}
