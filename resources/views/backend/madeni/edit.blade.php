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
                            <h2>Debtor Dashboard</h2>
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
                        New Debtor...
                    </button>
                </div>
                <div class="add-task-button">
                    <a class="btn primary-btn" href="{{ route('debtors.list')}}">
                        Debtors List
                    </a>
                </div>
            </div>


            <div>
                <form method="POST" action="{{ route('debtors.update', $debtors) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="task-modal-left">
                                <h5 class="modal-title">Add Debtor</h5>

                                <div class="input-style-1">
                                    <label for="debtor_name">Debtor Name</label>
                                    <input type="text" class="form-control" id="debtor_name" name="debtor_name" value="{{ old('debtor_name', $debtors->debtor_name)}}" required>
                                </div>
                                
                                <div class="input-style-1">
                                    <label for="debtor_phonenumber">Debtor PhoneNumber</label>
                                    <input type="text" class="form-control" id="debtor_phonenumber" name="debtor_phonenumber" value="{{ old('debtor_phonenumber', $debtors->debtor_phonenumber)}}" required>
                                </div>

                                <div class="input-style-1">
                                    <label for="material_taken">Material Taken</label>
                                    <input type="text" class="form-control" id="material_taken" name="material_taken" value="{{ old('material_taken', $debtors->material_taken)}}" required>
                                </div>

                                <div class="input-style-1">
                                    <label for="payment_date">Payment Date</label>
                                    <input type="date" class="form-control" id="payment_date" name="payment_date" value="{{ old('payment_date', $debtors->payment_date)}}"  required>
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

                                <div class="input-style-1">
                                    <label for="debtor_address">Debtor Address</label>
                                    <input type="text" class="form-control" id="debtor_address" name="debtor_address" value="{{ old('debtor_address', $debtors->debtor_address)}}" required>
                                </div>

                                <div class="input-style-1">
                                    <label for="amount">Amount Needed</label>
                                    <input type="number" class="form-control" id="amount" name="amount" value="{{ old('amount', $debtors->amount)}}" required>
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