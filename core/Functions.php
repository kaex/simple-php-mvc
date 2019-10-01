<?php

function about()
{
	require_once '../app/m/about.php';

	return new m_about();
}

function index()
{
	require_once '../app/m/index.php';

	return new m_index();
}