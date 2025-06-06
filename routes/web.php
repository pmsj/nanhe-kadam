<?php

use App\Livewire\Home;
use App\Livewire\Welcome;
use App\Livewire\Faqs\Faqs;
use App\Livewire\AboutUs\AboutUs;
use App\Livewire\Article\Articles;
use App\Livewire\Programs\Programs;
use App\Livewire\Testimonials\Testimonials;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', AboutUs::class)->name('about');
Route::get('/our-programs', Programs::class)->name('programs');
Route::get('/testimonials', Testimonials::class)->name('testimonials');
Route::get('/articles', Articles::class)->name('articles');
Route::get('/frequently-asked-questions', Faqs::class)->name('faqs');
