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

        $this->slides = ModelsImageCarousel::all()->toArray();
      
    }
    public function render()
    {
        return view('livewire.carousel.image-carousel');
    }
}
