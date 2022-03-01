<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        dump($this->getNews());

        return view( view: 'news.index', [
            'newsList' => $news
        ]);
    }
    public function show($id)
    {
        return view( view: 'news.show', [
            'news' => $new
        ]);
    }   
}
