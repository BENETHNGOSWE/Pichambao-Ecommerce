@extends('backend.layouts.main')
@section('content')




<main class="main-wrapper">
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Product Dashboard</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== kanban header start ========== -->
            <div class="kanban-header">
                <div class="kanban-header-members">
                    <button class="add-member-button text-gray">
                        <i class="lni lni-plus"></i>
                        New member...
                    </button>
                </div>
                <div class="add-task-button">
                    <a class="btn primary-btn" href="{{ route('indexproduct')}}">
                        Product List
                    </a>
                </div>
            </div>


            <div>
                <form method="POST" action="{{ route('featured.storefeatured') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
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
                            <div class="task-modal-left">
                                <button type="button" class="border-0 bg-transparent ms-auto close-button" data-bs-dismiss="modal">
                                    <svg width="26" height="26" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.9999 13.2324L21.1874 7.04492L22.9549 8.81242L16.7674 14.9999L22.9549 21.1874L21.1874 22.9549L14.9999 16.7674L8.81242 22.9549L7.04492 21.1874L13.2324 14.9999L7.04492 8.81242L8.81242 7.04492L14.9999 13.2324Z" fill="currentColor" />
                                    </svg>
                                </button>

                                <div class="select-style-1">
                                    <label>Select category</label>
                                    <div class="select-position">
                                        <select class="form-control" id="category" name="category" required>
                                            <option value="featured">Picha Mbao</option>
                                            <option value="latest">Saa</option>
                                            <option value="rated">Sticker</option>
                                            <option value="review">Branding</option>
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
                                        <button type="submit" class="btn btn-primary w-100">
                                            Create
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- ========== kanban header end ========== -->
            <div class="add-task-modal">
                <div class="modal fade" id="addTaskModal" tabindex="-1" aria-hidden="false">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== kanban cards start ========== -->

            <!-- ========== kanban cards end ========== -->
        </div>
        <!-- end container -->
    </section>



    <script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
</main>

@endsection