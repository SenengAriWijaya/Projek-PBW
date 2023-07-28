<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $primaryKey = 'id_barang';
    protected $table = 'barang';
    protected $useTimestamps = true;

    // public function PilihBarang($id)
    // {
    //     $query = $this->getWhere(['id' => $id]);
    //     return $query;
    // }

    public function search($keyword)
    {
        // $builder = $this->table('barang');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('barang')->like('nama_barang', $keyword)->orLike('harga', $keyword);
    }

    public function getBarang($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
