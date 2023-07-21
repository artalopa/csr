<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileRegulasi extends Model
{
    use HasFactory;

    protected $table = 'profile_regulasis';
    protected $fillable = [
        'description', 'image_left', 'image_right'
    ];

    public function getData()
    {
        return $this->select('id', 'description', 'image_left', 'image_right')->first();
    }

    public function createData(array $data)
    {
        return $this->create($data);
    }

    public function getDetail($id)
    {
        return $this->where('id', $id)->first();
    }
}
