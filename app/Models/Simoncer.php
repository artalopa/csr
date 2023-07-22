<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simoncer extends Model
{
    use HasFactory;

    protected $table = 'simoncers';
    protected $fillable = [
        'title', 'slug', 'simoncer_category_id', 'description', 'image'
    ];

    public function SimoncerCategory()
    {
        return $this->belongsTo(SimoncerCategory::class);
    }

    public function getByCategory($category_id)
    {
        return $this->where('simoncer_category_id', $category_id)->orderBy('id', 'desc')->paginate(10);
    }

    public function getPaginate()
    {
        return $this->select('title', 'slug', 'simoncer_category_id', 'image', 'created_at')->orderBy('id', 'desc')->paginate(10);
    }

    public function getRecent()
    {
        return $this->select('title', 'slug', 'simoncer_category_id', 'image', 'created_at')->orderBy('id', 'desc')->paginate(4);
    }

    public function getSlider()
    {
        return $this->select('title', 'slug', 'simoncer_category_id', 'image')->orderBy('id', 'desc')->paginate(3);
    }

    public function getHome()
    {
        return $this->select('title', 'slug', 'simoncer_category_id', 'image', 'created_at')->orderBy('id', 'desc')->paginate(2);
    }

    public function getDetail($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    public function createData(array $data)
    {
        return $this->create($data);
    }
}
