<?php

namespace App\Controllers;

class Single_Product5 extends BaseController
{
    public function index()
    {
        return view('layout/header')
            . view('pages/single_product5')
            . view('layout/footer');
    }
}
