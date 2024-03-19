@extends('backend.layouts.main')
@section('content')
<main class="main-wrapper">
    <section class="section">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Debtors Dashboard</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style clients-table-card mb-30">
                        <h6>Debtors Details</h6><br><hr>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Debtor Name</th>
                                    <td>{{ $debtors->debtor_name }}</td>
                                </tr>
                                <tr>
                                    <th>Debtor Phone Number</th>
                                    <td>{{ $debtors->debtor_phonenumber }}</td>
                                </tr>
                                <tr>
                                    <th>Debtor Location</th>
                                    <td>{{ $debtors->debtor_address }}</td>
                                </tr>
                                <tr>
                                    <th>Material Taken</th>
                                    <td style="color: red;">Tsh {{ $debtors->material_taken }}</td>
                                </tr>
                                <tr>
                                    <th>Amount Needed</th>
                                    <td style="color: red;">Tsh {{ $debtors->amount }}</td>
                                </tr>
                                <tr>
                                    <th>Payment Date</th>
                                    <td style="color: red;">{{ $debtors->payment_date }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="title d-flex justify-content-between align-items-center">
                            <div class="more-btn-wrapper">
                                <a class="btn primary-btn" href="{{ route('debtors.list')}}">
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