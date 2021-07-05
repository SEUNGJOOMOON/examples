<?php

namespace App\Controllers;

class Example extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function dataTable()
	{
		return view('example/dataTable');
	}
}
