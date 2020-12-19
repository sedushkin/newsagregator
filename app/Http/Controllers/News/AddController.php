<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index(){

        return view('news.add');
    }
}
