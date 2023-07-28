<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/index')
            . view('layout/footer');
    }
}
