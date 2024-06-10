<?php

namespace App\Livewire\Admin;

use App\Models\BlogPosts as ModelsBlogPosts;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use Livewire\WithFileUploads;

class BlogPosts extends Component
{
    use WithFileUploads;

    public $content;
    public $title;
    public $image;
    public $status = 'published';
    public $tags;

    public function render()
    {
        $blog_posts = ModelsBlogPosts::latest()->get();
        return view('livewire.admin.blog-posts', compact('blog_posts'));
    }

    function StorePost()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'status' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $tags = [];

            if ($this->tags) {
                $tags = array_map('trim', explode(',', $this->tags));
            }


            $post = new ModelsBlogPosts();
            $post->title = $this->title;
            $post->user_id = auth()->id();
            $post->content = $this->content;
            $post->status = $this->status;
            $post->image = $this->image->storeAs('blogs', $this->image->hashName(), 'public');
            $post->slug = Str::slug($this->title);
            $post->tags = json_encode($tags);
            $post->save();

            DB::commit();

            $this->dispatch('clearCKEditor');
            $this->reset();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    function updatedImage()
    {
        $manager = new ImageManager(Driver::class);
        $image = $manager->read($this->image->getRealPath());
        $image->resize(1077, 606, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $image->save($this->image->getRealPath());
    }
}
