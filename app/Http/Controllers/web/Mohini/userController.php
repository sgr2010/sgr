<?php

namespace App\Http\Controllers\web\Mohini;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    //

	public function index()
	{
		return view('harmoney/home.twig');
	}

	public function register()
	{
		return view('mohini/user/register.twig');	
	}


}
