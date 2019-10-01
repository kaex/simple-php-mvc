<?php


class Core
{
	protected $currentController = 'index';
	protected $params            = [];

	public function __construct()
	{
		$url = $this->getUrl();

		if (file_exists('../app/c/' . htmlspecialchars(trim($url[1])) . '.php'))
		{
			$this->currentController = htmlspecialchars(trim($url[1]));
			unset($url[1]);
		}
		require_once '../app/c/' . $this->currentController . '.php';

		$class = 'c_'.$this->currentController;
		$this->currentController = new $class;

		$this->params = $url ? array_values($url) : [];
	}

	public function getUrl()
	{
		if (isset($_GET['url']))
		{
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/', $url);

			return $url;
		}
		else
		{
			return null;
		}
	}
}