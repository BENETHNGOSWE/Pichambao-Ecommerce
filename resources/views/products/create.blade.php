
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
                            <h2> Company Products Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== kanban header start ========== -->
            <div class="kanban-header">
                <div class="kanban-header-members">
                    <button class="add-member-button text-gray">
                        <i class="lni lni-plus"></i>
                        New Company Product...
                    </button>
                </div>
                <div class="add-task-button">
                    <a class="btn primary-btn" href="{{ route('indexproduct')}}">
                        Company Product List
                    </a>
                </div>
            </div>


            <div>
                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="task-modal-left">
                                <h5 class="modal-title">Create Company Products </h5>
                                <div class="input-style-1">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
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