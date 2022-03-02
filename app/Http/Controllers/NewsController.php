<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getNews();

        return view( 'news.index', [
            'newsList' => $news,
        ]);
    }
    public function show($id)
    {
        return view( 'news.show', [
            'news' => $this->getNews($id),
        ]);
    }   
}
