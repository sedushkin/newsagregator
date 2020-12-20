<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllCategoryController extends Controller
{
    private $categories = [
        1 => 'HTML',
        2 => 'PHP',
        3 => 'Laravel'
    ];
    public function index(){

      return view('news.allcategory',
      [
          'categories' => $this->categories,
      ]
      );
    }
}
