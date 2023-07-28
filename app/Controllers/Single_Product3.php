<?php

namespace App\Controllers;

class Single_Product3 extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/single_product3')
            . view('layout/footer');
    }
}
