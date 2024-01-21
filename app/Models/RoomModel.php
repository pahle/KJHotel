<?php

namespace App\Models;

use CodeIgniter\Model;

class RoomModel extends Model
{
    protected $table = 'room';
    protected $allowedFields = ['type', 'rate', 'room_left', 'image'];

    public function search($keyword)
    {
        return $this->table('room')->like('type', $keyword)->orLike('rate', $keyword)->orLike('room_left', $keyword)->orLike('image', $keyword);
    }
}