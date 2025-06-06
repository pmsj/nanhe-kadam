<?php

namespace App\Livewire\Article;

use App\Models\User;
use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Articles extends Component
{
    public $articles;
    public $user;

    public function mount(User $user)
    {
        $this->user = $user;
        // Fetch all articles from the database
        $this->articles = Article::with('user')->latest()->get();
    }

    public function render()
    {
        return view('livewire.article.articles');
    }
}
