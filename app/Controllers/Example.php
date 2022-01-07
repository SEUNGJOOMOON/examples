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
		// return view(');
		return render('example/dataTable');
	}

	public function googleChart()
	{
		return view('example/googleChart');
	}

	public function tableExcel()
	{
		return view('example/tableExcel');
	}
}
