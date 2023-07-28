<?php

namespace App\Controllers;

class Single_Product4 extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/single_product4')
            . view('layout/footer');
    }
}
