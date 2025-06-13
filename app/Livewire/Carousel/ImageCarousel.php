<?php

namespace App\Livewire\Carousel;

use App\Models\ImageCarousel as ModelsImageCarousel;
use Livewire\Component;
use Symfony\Component\VarDumper\Caster\ImagineCaster;

class ImageCarousel extends Component
{
     public $slides = [];
    public function mount(ModelsImageCarousel $carousel)
    {

        $this->slides = ModelsImageCarousel::with('media')->get()->map(function ($item) {
        return [
            'image' => $item->getFirstMediaUrl('carousel-images'), // 'carousel' is the media collection name
            'title' => $item->title ?? '', // optional, if supported by your carousel version
            'description' => $item->description ?? '', // optional
        ];
    })->toArray();
      
    }
    public function render()
    {
        return view('livewire.carousel.image-carousel');
    }
}
