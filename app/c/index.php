<?php


class c_index extends Controller
{
	public function __construct()
	{
		$data = [
			'title' => 'Welcome Home'
		];
		$this->view('pages/index', $data);
	}
}
