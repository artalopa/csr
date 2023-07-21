<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomiteTsp extends Model
{
    use HasFactory;

    protected $table = 'komite_tsps';
    protected $fillable = [
        'name', 'position', 'quotes', 'image'
    ];

    public function getData()
    {
        return $this->select('id', 'name', 'position', 'quotes', 'image')->orderBy('id', 'desc')->paginate(10);
    }

    public function getAll()
    {
        return $this->all('id', 'name', 'position', 'quotes', 'image');
    }

    public function getDetail($slug)
    {
        return $this->where('id', $slug)->first();
    }

    public function createData(array $data)
    {
        return $this->create($data);
    }
}
