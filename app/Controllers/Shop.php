<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Shop extends BaseController
{
    protected $barangModel;
    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $barang = $this->barangModel->search($keyword);
        } else {
            $barang = $this->barangModel;
        }
        //$barang = $this->barangModel->findAll();

        $data = [
            //'barang' => $this->barangModel->getBarang()
            //'barang' => $this->barangModel->findAll()
            'barang' => $this->barangModel->paginate(6, 'barang'),
            'pager' => $this->barangModel->pager
        ];

        return view('layout/header')
            . view('pages/shop', $data)
            . view('layout/footer');
    }

    public function detail($slug)
    {
        $data = [
            'barang' => $this->barangModel->getBarang($slug)
        ];
        return view('layout/header')
            . view('pages/single_product', $data)
            . view('layout/footer');
    }

    // public function view($id)
    // {
    //     $barang = new BarangModel();
    //     $data['barang'] = $barang->PilihBarang($id)->getRow();
    //     return view('layout/header')
    //         . view('pages/shop', $data)
    //         . view('layout/footer');
    // }
}
