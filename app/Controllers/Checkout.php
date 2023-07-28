<?php

namespace App\Controllers;

class Checkout extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/checkout')
            . view('layout/footer');
    }
}
