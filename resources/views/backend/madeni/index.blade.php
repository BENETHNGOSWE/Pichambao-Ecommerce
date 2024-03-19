@extends('backend.layouts.main')
@section('content')
<main class="main-wrapper">
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Orders Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style clients-table-card mb-30">
                        <div class="title d-flex justify-content-between align-items-center">
                            <h6 class="mb-10">Orders Report</h6>
                            <div class="more-btn-wrapper">
                            <a class="btn primary-btn" href="{{ route('debtors.create')}}">
                        <i class="lni lni-plus"></i>  Add New Debtor
                    </a>
                               
                            </div>
                        </div><br>
                        <div class="table-wrapper table-responsive">
                            <table class="table lead-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>
                                        <th>
                                            <h6>Debtor Name</h6>
                                        </th>
                                        <th>
                                            <h6>Debtor Phone No</h6>
                                        </th>
                                        <th>
                                            <h6>Debtor Amount</h6>
                                        </th>
                                        <th>
                                            <h6>Materials Taken</h6>
                                        </th>
                                        <th class="action">
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($debtors as $debtor)
                                    <tr>
                                        <td>
                                            {{ $loop->count - $loop->iteration + 1}}
                                        </td>
                                        <td>
                                            <p>{{$debtor->debtor_name}}</p>
                                        </td>
                                        <td>
                                            <p>{{$debtor->debtor_phonenumber}}</p>
                                        </td>
                                        <td>
                                            <p style="color: red;">Tsh {{$debtor->amount}}</p>
                                        </td>

                                        <td>
                                            <p>{{$debtor->material_taken}}</p>
                                        </td>
                                        
                                       
                                        <td>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="{{ route('debtors.edit', $debtor ) }}">
                                                    <button class="btn btn-outline-success">
                                                        <i class="lni lni-pencil"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="{{ route('debtors.show', $debtor)}}">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="lni lni-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <form action="{{ route('debtors.delete', $debtor)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete()">
                                                        <i class="lni lni-trash-can"></i>
                                                    </button>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete the debtor records ?');
    }
</script>
@endsection