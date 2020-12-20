<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index($NewsId){
        $news = (new News())->getById($NewsId);
        return view('news.news', [
            'news' => $news
        ]);
    }
}
