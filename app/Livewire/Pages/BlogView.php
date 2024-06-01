<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

class BlogView extends Component
{
    #[Title('Blog View')]
    public function render()
    {
        return view('livewire.pages.blog-view');
    }
}
