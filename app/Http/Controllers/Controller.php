<?php

declare(strict_types=1);
namespace app\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getNews(int $id = null): array
{
    if ($id !== null) {
        return [
            'title' => fake()->jobTitle(),
            'author' => fake()->userName(),
            'status' => 'ACTIVE',
            'description' => fake()->text(100),
            'created_at' => now()->format('d-m-Y H:i'),
        ];
            }   
        
    
    $quantityNews = 10;
    $news = [];
    for ($i=0; $i < $quantityNews; $i++) {
$news[] = [
    'title' => fake()->jobTitle(),
    'author' => fake()->userName(),
    'status' => 'ACTIVE',
    'description' => fake()->text(100),
    'created_at' => now()->format('d-m-Y H:i'),
];
    }
    return $news;
}

}

