<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    use HasFactory;

    protected $table = 'news_categories';
    protected $fillable = [
        'name', 'slug', 'description', 'image'
    ];

    public function getAll()
    {
        return $this->select('id', 'name', 'slug', 'image')->orderBy('id', 'desc')->get();
    }

    public function getPaginate()
    {
        return $this->select('name', 'slug', 'description', 'image')->orderBy('id', 'desc')->paginate(5);
    }

    public function getDetail($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    public function createData(array $data)
    {
        return $this->create($data);
    }

    public function updateData(array $data, $slug)
    {
        return $this->where('slug', $slug)->update($data);
    }

    public function deleteData($slug)
    {
        return $this->where('slug', $slug)->delete();
    }
}
