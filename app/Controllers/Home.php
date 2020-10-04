<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$username = session()->get('username');
		if ($username == "") {
			return redirect()->to('/login');
		}
		$data = [
			'title' => 'Halaman Home'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
