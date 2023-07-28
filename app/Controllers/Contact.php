<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/contact')
            . view('layout/footer');
    }
}
