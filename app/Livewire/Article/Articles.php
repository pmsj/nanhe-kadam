<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class Articles extends Component
{
    use WithPagination;

    public  $pagination = 5;

     public function updatingPagination()
    {
        $this->resetPage(); // This is important to reset to page 1 when per-page changes
    }

    public function render()
    {
         $articles = Article::with('user')->latest()->paginate($this->pagination);
        return view('livewire.article.articles', compact('articles'));
    }


}
