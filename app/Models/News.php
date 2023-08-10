<?;php

declare(strict_types=1);

namespace App\Models

use Illuminate\Database\Eloquent\Factories\MasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use MasFactory;

    protected $table = 'news';
}