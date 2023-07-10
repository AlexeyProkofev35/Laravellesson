<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index():View
    {
return view ('news.index');
    }
    public function show(int $id):View
    {
        return view ('news.show');
    }
}

