<?php

namespace App\Models;

use CodeIgniter\Model;

class GreenhouseModel extends Model
{
    protected $table = 'greenhouse';
    protected $allowedFields = ['nama_tanaman', 'nama_latin','deskripsi', 'gambar'];

    public function search($keyword)
    {   
        if ($keyword == null) {
            return $this->table('greenhouse');
        }
        return $this->table('greenhouse')->like('nama_tanaman', $keyword)->orLike('nama_latin', $keyword)->orLike('deskripsi', $keyword)->orLike('gambar', $keyword);
    }
}