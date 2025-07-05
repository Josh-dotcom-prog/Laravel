<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Translation\Test\ProviderTestCase;

class Post extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'excerpt',
        'content',
        'image'
    ];
}
