<?php

namespace App\Livewire\Pages;

use App\Models\BlogPosts;
use Livewire\Attributes\Title;
use Livewire\Component;

class Blogs extends Component
{
    #[Title('Our Blog')]

    public $count = 6;

    public function render()
    {
        $blogs = BlogPosts::latest()->paginate($this->count);
        return view('livewire.pages.blogs', compact('blogs'));
    }

    function loadMore()
    {
        $this->count += 6;
    }
}
