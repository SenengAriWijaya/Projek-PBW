<?php

namespace App\Controllers;

class Single_Product1 extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/single_product1')
            . view('layout/footer');
    }
}
