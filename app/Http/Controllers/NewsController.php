<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class NewsController extends Controller

dd(
    DB::table('news')
    ->whereNotBetween('id', [3,6])
    ->get()
);
   public function index(Request $request): View
{
return view ('admin.news.index', [
'newsList' => News::all(),
]);
}      

    public function create():View
    {
        $categories = Category::all();
        return view ('admin.news.create', [
        'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $title = isset($_POST['title']) ? $_POST['title'] : null;
    }


