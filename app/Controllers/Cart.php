<?php

namespace App\Controllers;

class Cart extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/cart')
            . view('layout/footer');
    }
}
