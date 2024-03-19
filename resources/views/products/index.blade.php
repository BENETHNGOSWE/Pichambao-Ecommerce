@extends('backend.layouts.main')
@section('content')
<main class="main-wrapper">
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Company Product Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kanban-header">
                <div class="kanban-header-members">
                    <button class="add-member-button text-gray">
                        <i class="lni lni-plus"></i>
                        New Company Product...
                    </button>
                </div>
                <div class="add-task-button">
                    <a class="btn primary-btn" href="{{ route('products.create')}}">
                        <i class="lni lni-plus"></i> Add New Company Product
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style clients-table-card mb-30">
                        <div class="title d-flex justify-content-between align-items-center">
                            <h6 class="mb-10">Company Product Report</h6>
                            <div class="more-btn-wrapper">
                                
                            </div>
                        </div>
                        <div class="table-wrapper table-responsive">
                            <table class="table lead-table">
                                <thead>
                                    <tr>
                                        <th class="image">
                                            <h6>#</h6>
                                        </th>
                                        <th class="name">
                                            <h6>Name</h6>
                                        </th>
                                        <th class="action">
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($companyproducts as $category)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration}}
                                        </td>
                                        <td>
                                            <p>{{ $category->name }}</p>
                                        </td>
                                        <td>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="#">
                                                    <button class="btn btn-outline-success">
                                                        <i class="lni lni-pencil"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="#">
                                                    <button class="btn btn-outline-primary">
                                                        <i class="lni lni-eye"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <form action="#" method="POST">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger">
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

@endsection