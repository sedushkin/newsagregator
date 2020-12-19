<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurrentCategoryController extends Controller
{
    public function index($categoryId){
        $news = (new News())->getByCategoryId($categoryId);
        return view('news.currentcategory',
        [
            'news' => $news
        ]
        );
    }
}
