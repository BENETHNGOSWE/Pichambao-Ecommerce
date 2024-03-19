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
                        <h6>Order Details</h6><br><hr>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Order Name</th>
                                    <td>{{ $orders->order_name }}</td>
                                </tr>
                                <tr>
                                    <th>Order Type</th>
                                    <td>{{ $orders->order_type }}</td>
                                </tr>
                                <tr>
                                    <th>Order Amount</th>
                                    <td>Tsh {{ $orders->order_amount }}</td>
                                </tr>
                                <tr>
                                    <th>Order Paid Amount</th>
                                    <td style="color: red;">Tsh {{ $orders->order_paidedamount }}</td>
                                </tr>
                                <tr>
                                    <th>Order Remaining Amount</th>
                                    <td style="color: red;">Tsh {{ $orders->order_totaldeptamount }}</td>
                                </tr>
                                <tr>
                                    <th>Order Status</th>
                                    <td>{{ $orders->order_status }}</td>
                                </tr>
                                <tr>
                                    <th>Order End Date</th>
                                    <td style="color: red;">{{ $orders->order_enddate }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="more-btn-wrapper">
                                <a class="btn primary-btn" href="{{ route('orders.list')}}">
                                    Back
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection