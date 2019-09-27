<?php


class about extends Controller
{
    public function index()
    {
        $this->setCss('/assets/css/style.css');
        $this->setJs('assets/js/main.js');
        $data = [
            'title' => 'About Us'
        ];
        $this->view('pages/about', $data);
    }
}