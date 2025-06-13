<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ImageCarousel extends Model implements HasMedia
{
  use InteractsWithMedia;

  protected $fillable = [
    'title',
    'description',
    'url',
    'urlText',
  ];

}
