<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerHome extends Model
{
    use HasFactory;

    protected $table = 'banner_homes';
    protected $fillable = [
        'banner_right', 'banner_left'
    ];

    public function getData()
    {
        return $this->select('id', 'banner_right', 'banner_left')->first();
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
