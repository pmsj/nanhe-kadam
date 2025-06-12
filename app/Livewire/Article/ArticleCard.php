<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleCard extends Component
{
    Public Article $article;
    
    public function render()
    {
        return view('livewire.article.article-card');
    }
}
