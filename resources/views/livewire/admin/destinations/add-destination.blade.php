<div>
    <button type="button" class="btn btn-primary btn-success rounded-1" data-bs-toggle="modal"
        data-bs-target="#addDestination">
        Add destination
    </button>

    <!-- Modal -->
    <div class="modal fade" id="addDestination" tabindex="-1" data-bs-backdrop="static" role="dialog"
        aria-labelledby="addDestinationLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog rounded-1 modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-1">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDestinationLabel">
                        Add destination
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="#" method="post" wire:submit.prevent='storeDestination'>
                            @csrf
                            <div class="row align-items-center g-3">
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control shadow-none rounded-1" id="destination"
                                        name="destination" wire:model.defer='destination' required
                                        placeholder="Enter destination">
                                    @error('destination')
                                        <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <button class="btn btn-primary rounded-1 " type="button"
                                        wire:loading.attr='disabled'
                                        onclick="event.preventDefault();document.getElementById('leading_image').click();">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div wire:loading wire:target='leading_image'>
                                                <div class="spinner-border text-light spinner-border-sm" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                            <span class="mx-2">Main image</span>
                                        </div>
                                    </button>
                                    <input type="file" wire:model='leading_image' class="d-none" id="leading_image">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <button class="btn btn-info rounded-1" type="button" wire:loading.attr='disabled'
                                        onclick="event.preventDefault();document.getElementById('other_images').click();">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div wire:loading wire:target='other_images'>
                                                <div class="spinner-border text-primary spinner-border-sm"
                                                    role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                            <span class="mx-2">Other images</span>
                                        </div>

                                    </button>
                                    <input type="file" wire:model='other_images' class="d-none" multiple
                                        id="other_images">
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            @if ($leading_image)
                                                <img src="{{ $leading_image->temporaryUrl() }}" alt="image"
                                                    class="img-fluid">
                                            @endif
                                        </div>
                                        @if ($other_images)
                                            @foreach ($other_images as $image)
                                                <div class="col-md-3">
                                                    <img src="{{ $image->temporaryUrl() }}" alt="image"
                                                        class="img-fluid">
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3" wire:ignore>
                                <textarea name="description" id="editor" cols="30" rows="10" class="form-control rounded-1 shadow-none"
                                    placeholder="Enter destination description"></textarea>
                            </div>
                    </div>
                    <button class="btn btn-warning rounded-1 mt-2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('livewire:init', function() {
        ClassicEditor.create(document.querySelector('#editor')).then(editor => {
            editor.model.document.on('change:data', () => {
                @this.set('description', editor.getData());
            });
        }).catch(error => {
            console.error(error);
        });
    });
</script>
