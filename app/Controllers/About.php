<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/about')
            . view('layout/footer');
    }
}
