@extends('layouts.candidate')
@section('content')

<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
<div class="dashboard-content">
    <div class="dashboard-header clearfix">
        <div class="row">
            <div class="col-sm-12 col-md-6"><h4>Transaction</h4></div>
            <div class="col-sm-12 col-md-6">
                <div class="breadcrumb-nav">
                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">Index</a>
                        </li>
                        <li>
                            <a href="{{ route('candidate-dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">Transaction</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="submit-address dashboard-list">
        <div class="single-manage-jobs table-responsive transaction-table">
            <table class="table">
                <thead>
                <tr>
                    <th>Package</th>
                    <th>Payment Date</th>
                    <th>Payment Method</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Node.js Developer</a></td>
                    <td class="table-date">12 June, 2019</td>
                    <td>Paypal</td>
                    <td>$210.50</td>
                    <td><span class="pending">Approved</span></td>
                </tr>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a></td>
                    <td class="table-date">29 May, 2019</td>
                    <td>Bank Transfer</td>
                    <td>$122.00</td>
                    <td><span class="expired">Pending</span></td>
                </tr>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Frontend React Developer</a></td>
                    <td class="table-date">28 June, 2019</td>
                    <td>Bank Wire Transfer</td>
                    <td>$197.00</td>
                    <td><span class="pending">Approved</span></td>
                </tr>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a></td>
                    <td class="table-date">29 May, 2019</td>
                    <td>Payoneer</td>
                    <td>$122.00</td>
                    <td><span class="expired">Pending</span></td>
                </tr>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Frontend React Developer</a></td>
                    <td class="table-date">14 May, 2019</td>
                    <td>Bank Wire Transfer</td>
                    <td>$197.00</td>
                    <td><span class="pending">Approved</span></td>
                </tr>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Frontend React Developer</a></td>
                    <td class="table-date">28 June, 2019</td>
                    <td>Bank Wire Transfer</td>
                    <td>$197.00</td>
                    <td><span class="pending">Approved</span></td>
                </tr>
                <tr>
                    <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a></td>
                    <td class="table-date">29 May, 2019</td>
                    <td>Swift</td>
                    <td>$122.00</td>
                    <td><span class="expired">Pending</span></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p class="sub-banner-2 text-center">© 2020 Theme Vessel. All Rights Reserved.</p>
</div>
        </div>
    </div>
</div>

@endsection