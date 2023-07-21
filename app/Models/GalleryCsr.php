<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryCsr extends Model
{
    use HasFactory;

    protected $table = 'gallery_csrs';
    protected $fillable = [
        'title', 'slug', 'gallery_csr_category_id', 'description', 'image', 'location', 'date'
    ];

    public function GalleryCsrCategory()
    {
        return $this->belongsTo(GalleryCsrCategory::class);
    }

    public function getByCategory($category_id)
    {
        return $this->where('gallery_csr_category_id', $category_id)->orderBy('id', 'desc')->paginate(10);
    }

    public function getPaginate()
    {
        return $this->select('title', 'slug', 'gallery_csr_category_id', 'image', 'location', 'date')->orderBy('id', 'desc')->paginate(10);
    }

    public function getRecent()
    {
        return $this->select('title', 'slug', 'gallery_csr_category_id', 'image', 'location', 'date', 'created_at')->orderBy('id', 'desc')->paginate(4);
    }

    public function getSlider()
    {
        return $this->select('title', 'slug', 'gallery_csr_category_id', 'image')->orderBy('id', 'desc')->paginate(3);
    }

    public function getHome()
    {
        return $this->select('title', 'slug', 'gallery_csr_category_id', 'description', 'image', 'location', 'date')->orderBy('id', 'desc')->paginate(6);
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
