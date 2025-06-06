<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageCarousel extends Model
{
  protected $fillable = [
    'image',
    'title',
    'description',
    'url',
    'urlText',
  ];

}
