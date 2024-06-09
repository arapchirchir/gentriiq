<?php

namespace App\Livewire\Pages;

use App\Models\BlogPosts;
use Livewire\Attributes\Title;
use Livewire\Component;

class BlogView extends Component
{
    public $slug;
    #[Title('Blog View')]

    function mount()
    {
        $slug = request()->slug;
        $this->slug = $slug;
    }

    public function render()
    {
        $post = BlogPosts::where('slug', $this->slug)->first();
        $related_posts = BlogPosts::where('slug', '!=', $this->slug)->limit(2)->inRandomOrder()->get();
        return view('livewire.pages.blog-view', compact('post', 'related_posts'));
    }
}
