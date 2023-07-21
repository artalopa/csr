<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';
    protected $fillable = [
        'description', 'image'
    ];

    public function getData()
    {
        return $this->select('id', 'description', 'image')->first();
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
