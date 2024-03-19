<div>
    <form method="POST" action="{{ $featuredProduct ? route('featured.update', $featuredProduct) : route('featured.storefeatured') }}" enctype="multipart/form-data">
        @csrf
        @if($featuredProduct)
        @method('PUT')
        @endif
        <div class="row gx-0">
            <div class="col-lg-8">
                <div class="task-modal-left">
                    <h5 class="modal-title">Create Product</h5>

                    <div class="input-style-1">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="input-style-1">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price" required>
                    </div>

                    <div class="input-style-1">
                        <label>Add Image</label>
                        <img src="" alt="" class="img-product" id="file-preview" />
                        <input type="file" id="image" name="image" accept="image/*" onchange="showFile(event)">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="task-modal-right">
                    <button type="button" class="border-0 bg-transparent ms-auto close-button" data-bs-dismiss="modal">
                        <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9999 13.2324L21.1874 7.04492L22.9549 8.81242L16.7674 14.9999L22.9549 21.1874L21.1874 22.9549L14.9999 16.7674L8.81242 22.9549L7.04492 21.1874L13.2324 14.9999L7.04492 8.81242L8.81242 7.04492L14.9999 13.2324Z" fill="currentColor" />
                        </svg>
                    </button>

                    <div class="select-style-1">
                        <label>Select category</label>
                        <div class="select-position">
                            <select class="form-control" id="category" name="category" required>
                                <option value="featured">Featured</option>
                                <option value="latest">Latest</option>
                                <option value="rated">Rated</option>
                                <option value="review">Review</option>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <button type="button" data-bs-dismiss="modal" class="btn btn-danger w-100">
                                Cancel
                            </button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">
                                {{ $featuredProduct ? 'Update' : 'Create' }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </form>
</div>