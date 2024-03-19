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
                            <h2>Material Dashboard</h2>
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
                <form method="POST" action="{{ route('materials.update', $materials) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="task-modal-left">
                                <h5 class="modal-title">Add Material</h5>

                                <div class="input-style-1">
                                    <label for="material_name">Material Name</label>
                                    <input type="text" class="form-control" id="material_name" name="material_name" value="{{ old ('material_name', $materials->material_name)}}" required>
                                </div>
                                
                                <div class="input-style-1">
                                    <label for="material_quatity">Material Qty</label>
                                    <input type="text" class="form-control" id="material_quatity" name="material_quatity" value="{{ old('material_quatity', $materials->material_quatity)}}" required>
                                </div>

                                <div class="input-style-1">
                                    <label for="material_price">Material Price</label>
                                    <input type="text" class="form-control" id="material_price" name="material_price" value="{{old('material_price', $materials->material_price)}}" required>
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
                                    <label>Select Materials Size</label>
                                    <div class="select-position">
                                        <select class="form-control" id="material_size" name="material_size" value="{{old('material_size', $materials->material_size)}}" required>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="A3">A3</option>
                                            <option value="A4">A4</option>
                                            <option value="A5">A5</option>
                                            <option value="A6">A6</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-style-1">
                                    <label for="material_buyingdate">Buying Date</label>
                                    <input type="date" class="form-control" id="material_buyingdate" name="material_buyingdate" value="{{ old('material_buyingdate', $materials->material_buyingdate)}}" required>
                                </div>


                                <div class="row">
                                    <div class="col-6">
                                        <button type="button" data-bs-dismiss="modal" class="btn btn-danger w-100">
                                            Cancel
                                        </button>
                                    </div>
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Update
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