<?php

namespace App\Livewire\Pages;

use App\Models\BlogPosts;
use App\Models\PostComment;
use Livewire\Attributes\Title;
use Livewire\Component;

class BlogView extends Component
{
    public $slug;

    public $comment;

    // name
    public $name;

    // email
    public $email;

    // save email and name consent
    public $save_email_name_consent = false;

    #[Title('Blog View')]
    public function mount()
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

    public function commentFeedback()
    {
        $this->validate([
            'comment' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $comment = new PostComment();
        $comment->post_id = BlogPosts::where('slug', $this->slug)->first()->id;
        $comment->name = $this->name;
        $comment->email = $this->email;
        $comment->comment = $this->comment;
        $comment->save();

        $this->comment = '';
        $this->name = '';
        $this->email = '';
        $this->save_email_name_consent = false;
        $this->dispatch('notify', 'Comment submitted successfully');
    }
}
