<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('beranda');
	}

	public function hello()
	{
		return view('beranda');
	}
}
