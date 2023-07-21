<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information';
    protected $fillable = [
        'situs', 'description', 'phone', 'email', 'address', 'map'
    ];

    public function getData()
    {
        return $this->select('id', 'situs', 'description', 'phone', 'email', 'address', 'map')->first();
    }

    public function getDetail($id)
    {
        return $this->where('id', $id)->first();
    }

    public function createData(array $data)
    {
        return $this->create($data);
    }
}
