<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';
    protected $fillable = [
        'title', 'slug', 'news_category_id', 'description', 'image'
    ];

    public function NewsCategory()
    {
        return $this->belongsTo(NewsCategory::class);
    }

    public function getByCategory($category_id)
    {
        return $this->where('news_category_id', $category_id)->orderBy('id', 'desc')->paginate(10);
    }

    public function getPaginate()
    {
        return $this->select('title', 'slug', 'news_category_id', 'image', 'created_at')->orderBy('id', 'desc')->paginate(10);
    }

    public function getRecent()
    {
        return $this->select('title', 'slug', 'news_category_id', 'image', 'created_at')->orderBy('id', 'desc')->limit(4)->get();
    }

    public function getHomeRecent()
    {
        return $this->select('title', 'slug', 'news_category_id', 'image', 'created_at')->orderBy('id', 'desc')->limit(3)->get();
    }

    public function getSlider()
    {
        return $this->select('title', 'slug', 'news_category_id', 'image')->orderBy('id', 'desc')->limit(3)->get();
    }

    public function getHome()
    {
        return $this->select('title', 'slug', 'news_category_id', 'image', 'created_at')->orderBy('id', 'desc')->paginate(2);
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
