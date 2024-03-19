@extends('backend.layouts.main')
@section('content')
<main class="main-wrapper">
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Material Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style clients-table-card mb-30">
                        <div class="title d-flex justify-content-between align-items-center">
                            <h6 class="mb-10">Materials Report</h6>
                            <div class="more-btn-wrapper">
                            <a class="btn primary-btn" href="{{ route('materials.create')}}">
                        <i class="lni lni-plus"></i> Add New Material
                    </a>
                               
                            </div>
                        </div>
                        <div class="table-wrapper table-responsive">
                            <table class="table lead-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>#</h6>
                                        </th>
                                        <th>
                                            <h6>Material Name</h6>
                                        </th>
                                        <th>
                                            <h6>Material Price</h6>
                                        </th>
                                        <th>
                                            <h6>Material Size</h6>
                                        </th>
                                        <th>
                                            <h6>Material Qty</h6>
                                        </th>
                                        <th>
                                            <h6>Total Price</h6>
                                        </th>
                                        <th class="action">
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($materials as $material)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration}}
                                        </td>
                                        <td>
                                            <p>{{$material->material_name}}</p>
                                        </td>
                                        <td>
                                            <p>Tsh {{$material->material_price}}</p>
                                        </td>
                                        <td>
                                            <p>{{$material->material_size}}</p>
                                        </td>
                                        <td>
                                            <p>{{$material->material_quatity}}</p>
                                        </td>
                                        <td>
                                            <!-- <p>{{$material->material_buyingdate}}</p> -->
                                            <p style="color: red;">Tsh {{ $material ->total_price }}</p>

                                        </td>
                                        <td>
                                            <div style="display: inline-block; margin-right: 10px;">
                                                <a href="{{ route('materials.edit', $material ) }}">
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
                                                <form action="{{ route('materials.delete', $material)}}" method="POST">
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