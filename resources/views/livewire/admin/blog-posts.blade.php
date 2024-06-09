<div class="container-fluid">
    <div class="row g-3">
        <div class="col-md-8">
            <div class="card rounded-1">
                <div class="card-header">Create post</div>
                <div class="card-body">
                    <form action="#" wire:submit.prevent='StorePost' enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-sm-7 col-md-9 mb-3">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control shadow-none rounded-1" id="title"
                                        name="title" wire:model.defer='title' required placeholder="Post title">
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-5 col-md-3 mb-3">
                                <label for="status">Post status</label>
                                <select name="status" id="status" wire:model='status'
                                    class="form-control form-select shadow-none rounded-1">
                                    <option value="published">Published</option>
                                    <option value="draft">Draft</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3" wire:ignore>
                                <textarea name="content" id="editor" class="form-control shadow-none rounded-1" cols="30" rows="10"
                                    placeholder="Write your post..."></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="tags">Tags <small>(separate the tags with a comma)</small></label>
                                    <input type="text" class="form-control rounded-1 shadow-none"
                                        placeholder="e.g. Travel,Mombas,Uganda,Amboseli" wire:model='tags'>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control rounded-1 shadow-none"
                                        wire:model.defer='image'>
                                </div>
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" alt="image" class="img-fluid">
                                @endif
                            </div>
                            <div class="col-12 d-flex justify-content-end align-items-end">
                                <button type="submit" class="btn btn-primary shadow-none rounded-1">Create
                                    post</button>
                            </div>
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 mb-2">
            <div class="card rounded-1">
                <div class="card-header">
                    Posts
                </div>
                <div class="card-body">
                    @if (isset($blog_posts) && count($blog_posts) > 0)
                        <ul class="list-group">
                            @foreach ($blog_posts as $post)
                                <li class="list-group">
                                    <a href="{{ route('blog.detail', $post->slug) }}">{{ $post->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        No posts available
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let editorInstance;

    document.addEventListener('livewire:init', function() {
        ClassicEditor.create(document.querySelector('#editor')).then(editor => {
            editorInstance = editor;

            editor.model.document.on('change:data', () => {
                @this.set('content', editor.getData());
            });

            Livewire.on('clearCKEditor', () => {
                editorInstance.setData('');
            });
        }).catch(error => {
            console.error(error);
        });
    });
</script>
