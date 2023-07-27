<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index():View
    {
return view ('admin.news.index', [
'news.List' => $this->getNews(),
]);
        
}
    public function create():View
    {
        return view ('admin.news.create');
    }

    public function store(Request $request)
    {
        $title = isset($_POST['title']) ? $_POST['title'] : null;
    }
}

