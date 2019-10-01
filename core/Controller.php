<?php


class Controller
{
	private $css = [];
	private $js  = [];

	public function view($view, $data = [])
	{
		if (file_exists('../app/v/' . $view . '.php'))
		{
			require_once '../app/v/' . $view . '.php';
		}
		else
		{
			die('Views not here!');
		}
	}

	public function setCss($href)
	{
		$css = '<link rel="stylesheet" href="' . $href . '">';

		$this->css [] = $css;
	}

	public function printCss()
	{
		foreach ($this->css as $item)
		{
			echo $item . PHP_EOL;
		}
	}

	public function setJs($href)
	{
		$js = '<script src="' . $href . '"></script>';

		$this->js [] = $js;
	}

	public function printJs()
	{
		foreach ($this->js as $item)
		{
			echo $item . PHP_EOL;
		}
	}
}