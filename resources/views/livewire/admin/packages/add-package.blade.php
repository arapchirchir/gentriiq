<div>
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <form wire:submit.prevent='StorePackage' method="post" enctype="multipart/form-data">
        @csrf
        <div class="row g-2">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="package_name" class="label-text">Package name</label>
                    <input type="text" class="form-control rounded-1 shadow-none" wire:model='package_name'
                        placeholder="Package name" autofocus>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="price" class="label-text">Package price</label>
                    <input type="text" class="form-control rounded-1 shadow-none" wire:model='price'
                        placeholder="Package price">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="location" class="label-text">Location</label>
                    <input type="text" class="form-control rounded-1 shadow-none" wire:model='location'
                        placeholder="Location">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="duration" class="label-text">Duration</label>
                    <input type="text" class="form-control rounded-1 shadow-none" wire:model='duration'
                        placeholder="e.g 1 Week, 3 Days">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="discount" class="label-text">Discount</label>
                    <input type="number" class="form-control rounded-1 shadow-none" wire:model='discount'
                        placeholder="e.g 1000">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group" wire:ignore>
                    <label for="description" class="label-text">Description</label>
                    <textarea type="text" class="form-control rounded-1 shadow-none" placeholder="Package description" id="editor"
                        wire:ignore></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group rounded-1 border-dotted d-flex justify-content-center align-items-center flex-column"
                    onclick="document.getElementById('featuredImage').click();">
                    <label for="featured_image" class="label-text py-3">Featured image</label>
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-cloud-upload" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383" />
                            <path fill-rule="evenodd"
                                d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z" />
                        </svg>
                    </div>
                    <input type="file" class="form-control rounded-1 shadow-none d-none" wire:model='featured_image'
                        id="featuredImage">
                </div>
                @if ($featured_image)
                    <img src="{{ $featured_image->temporaryUrl() }}" alt="Featured Image"
                        class="img-fluid rounded-1 shadow" />
                @endif
            </div>
            <div class="col-md-6">
                <div class="form-group rounded-1 border-dotted d-flex justify-content-center align-items-center flex-column"
                    onclick="document.getElementById('otherImages').click();">
                    <label for="other_images" class="label-text py-3">Other images</label>
                    <div class="mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor"
                            class="bi bi-cloud-upload" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383" />
                            <path fill-rule="evenodd"
                                d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708z" />
                        </svg>
                    </div>
                    <input type="file" class="form-control rounded-1 shadow-none d-none" wire:model='other_images'
                        multiple max="5" id="otherImages">
                </div>
                @if ($other_images)
                    @foreach ($other_images as $image)
                        <img src="{{ $image->temporaryUrl() }}" alt="Other Image"
                            class="img-fluid rounded-1 shadow mb-2" />
                    @endforeach
                @endif
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-end">
            <button class="btn btn-primary rounded-1" type="submit">Submit</button>
        </div>
    </form>
</div>
<script>
    document.addEventListener('livewire:init', () => {
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('description', editor.getData());
                    console.log(@this.description);
                });
            })
            .catch(error => {
                console.error(error);
            });

        Livewire.on('userAlert', () => {
            // close addPackage modal
            $('#addPackage').modal('hide');

            new Noty({
                type: 'success',
                layout: 'topRight',
                text: 'Package added successfully',
                timeout: 5000,
            }).show();

            @this.dispatch('packageAdded');
        });

        Livewire.on('packageError', () => {
            new Noty({
                type: 'error',
                layout: 'topRight',
                text: 'Package not added',
                timeout: 5000,
            }).show();
        });
    });
</script>
