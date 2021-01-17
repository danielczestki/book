<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Book
 *
 * @property $title
 * @property $author
 * @property $category
 *
 * @package App\Models
 */
class Book extends Model
{
    use HasFactory;
}
