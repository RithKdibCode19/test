@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Booking & Transaction Report</h1>

    <form method="GET" action="{{ route('reports.index') }}" class="mb-4">
        <div class="row g-2">
            <div class="col-md-3">
                <input type="date" name="from_date" value="{{ $from->format('Y-m-d') }}" class="form-control" placeholder="From Date">
            </div>
            <div class="col-md-3">
                <input type="date" name="to_date" value="{{ $to->format('Y-m-d') }}" class="form-control" placeholder="To Date">
            </div>
            <div class="col-md-3">
                <select name="branch_id" class="form-control">
                    <option value="">All Branches</option>
                    @foreach($branches as $branch)
                        <option value="{{ $branch->id }}" {{ request('branch_id') == $branch->id ? 'selected' : '' }}>
                            {{ $branch->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
        <div class="mt-2">
            <button type="submit" name="period" value="this_week" class="btn btn-secondary btn-sm">This Week</button>
            <button type="submit" name="period" value="last_week" class="btn btn-secondary btn-sm">Last Week</button>
            <button type="submit" name="period" value="this_month" class="btn btn-secondary btn-sm">This Month</button>
            <button type="submit" name="period" value="last_month" class="btn btn-secondary btn-sm">Last Month</button>
            <button type="submit" name="period" value="this_year" class="btn btn-secondary btn-sm">This Year</button>
            <button type="submit" name="period" value="last_year" class="btn btn-secondary btn-sm">Last Year</button>
        </div>
    </form>

    <div class="row">
        <div class="col-md-3"><div class="card p-3">Total Revenue: ${{ number_format($totalRevenue, 2) }}</div></div>
        <div class="col-md-3"><div class="card p-3">Total Booking: {{ $totalBooking }}</div></div>
        <div class="col-md-2"><div class="card p-3">Confirmed: {{ $statusConfirmed }}</div></div>
        <div class="col-md-2"><div class="card p-3">Cancelled: {{ $statusCancelled }}</div></div>
        <div class="col-md-2"><div class="card p-3">Processing: {{ $statusProcessing }}</div></div>
    </div>

    <h3 class="mt-4">Revenue By Branch</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Branch</th>
                <th>Revenue</th>
            </tr>
        </thead>
        <tbody>
            @foreach($revenueByBranch as $branchId => $revenue)
            <tr>
                <td>{{ $branches->find($branchId)->name }}</td>
                <td>${{ number_format($revenue, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h3 class="mt-4">Transactions</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Booking ID</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $trx)
            <tr>
                <td>{{ $trx->id }}</td>
                <td>{{ $trx->booking_id }}</td>
                <td>${{ number_format($trx->amount, 2) }}</td>
                <td>{{ $trx->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
