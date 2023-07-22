<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $news;
    protected $category;

    public function __construct(News $news, NewsCategory $category)
    {
        $this->news = $news;
        $this->category = $category;
    }

    public function index()
    {
        $news = $this->news->getPaginate();
        $recent = $this->news->getRecent();
        $slider = $this->news->getSlider();
        return view('information_news.index', compact(['news', 'recent', 'slider']));
    }

    public function show($slug)
    {
        $news = $this->news->getDetail($slug);
        $recent = $this->news->getRecent();
        return view('information_news.show', compact(['news', 'recent']));
    }

    public function getByCategory($slug)
    {
        $category = $this->category->getDetail($slug);
        $news = $this->news->getByCategory($category->id);

        return view('information_news.category', compact('category', 'news'));
    }
}
