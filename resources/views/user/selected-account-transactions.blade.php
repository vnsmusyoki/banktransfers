@extends('layouts.main')
@section('title', 'User | Account Transactions')
@section('content')

    <section class="dashboard-section body-collapse account">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12">
                            <div class="tab-main">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a href="{{ route('user.myaccounts') }}" class="nav-link active" id="account-tab"
                                            role="tab" aria-controls="account" aria-selected="true">My Accounts</a>
                                    </li>

                                </ul>
                                <div class="tab-content mt-40">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">

                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Date</th>
                                                        <th>Transaction Type</th>
                                                        <th>Credit</th>
                                                        <th>Debit</th>
                                                        <th>Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transactions as $key => $trans)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ ucwords($trans->created_at->format('M, d Y, h:i A')) }}
                                                            </td>
                                                            <td>{{ ucwords($trans->transaction_category) }}</td>
                                                            <td>
                                                                @if ($trans->transaction_category == 'credit')
                                                                    <span class="text-success">+ $ {{ $trans->amount }}</span>
                                                                @endif

                                                            </td>
                                                            <td>

                                                                @if ($trans->transaction_category == 'debit')
                                                                <span class="text-warning">- $ {{ $trans->amount }}</span>
                                                            @endif
                                                            </td>
                                                            <td>$ {{ $trans->new_balance }}</td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
