<?php

class index extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome Home'
        ];
        $this->view('pages/index', $data);
    }
}
