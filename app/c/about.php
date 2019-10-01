<?php


class c_about extends Controller
{
	public function __construct()
	{
		$this->setCss('/assets/css/style.css');
		$this->setJs('assets/js/main.js');
		$data = [
			'title' => 'About Us'
		];
		$this->view('pages/about', $data);
	}
}