<?php

namespace TopClass\Controllers;

use TopClass\Controllers\AbstractController;

class Pages extends AbstractController 
{
    public function index() 
    {
        $data = [
            'title' => 'TraversyMVC'
        ];

        return $this->view('pages/index', $data);
    }

    public function about() 
    {
        $data = [
            'title' => 'About Us'
        ];

        return $this->view('pages/about', $data);
    }
}
