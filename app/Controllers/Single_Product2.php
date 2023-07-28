<?php

namespace App\Controllers;

class Single_Product2 extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/single_product2')
            . view('layout/footer');
    }
}
