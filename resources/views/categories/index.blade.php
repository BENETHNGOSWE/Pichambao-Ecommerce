@extends('backend.layouts.main')
@section('content')
<main class="main-wrapper">
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Product Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kanban-header">
                <div class="kanban-header-members">
                    <button class="add-member-button text-gray">
                        <i class="lni lni-plus"></i>
                        New member...
                    </button>
                </div>
                <div class="add-task-button">
                    <a class="btn primary-btn" href="{{ route('categories.createcategory')}}">
                        <i class="lni lni-plus"></i> Add New Category
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style clients-table-card mb-30">
                        <div class="title d-flex justify-content-between align-items-center">
                            <h6 class="mb-10">Leads Report</h6>
                            <div class="more-btn-wrapper">
                                <button class="more-btn dropdown-toggle" id="moreAction" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="lni lni-more-alt"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction">
                                    <li class="dropdown-item">
                                        <a href="#0" class="text-gray">Mark as Read</a>
                                    </li>
                                    <li class="dropdown-item">
                                        <a href="#0" class="text-gray">Reply</a>
                                    </li>
                                </ul>
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
                                        <th class="status">
                                            <h6>Image</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration}}
                                        </td>
                                        <td>
                                            <p>{{ $category->name }}</p>
                                        </td>
                                        <td>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="{{ route('categories.edit', $category) }}">
                                                    <button class="btn btn-outline-success">
                                                        <i class="lni lni-pencil"></i>
                                                    </button>
                                                </a>
                                            </div>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="{{ route('categories.edit', $category) }}">
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
                                        <td>
                                            <p><img src="{{ asset('images/' . $category->image) }}" alt="" style="max-width: 100px; height: auto;"></p>
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