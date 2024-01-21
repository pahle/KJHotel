<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $allowedFields = ['nama', 'bahan', 'kategori', 'harga', 'gambar'];

    public function search($keyword)
    {
        return $this->table('menu')->like('nama', $keyword)->orLike('bahan', $keyword)->orLike('gambar', $keyword);
    }
}