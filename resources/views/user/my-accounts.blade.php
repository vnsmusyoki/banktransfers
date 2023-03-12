@extends('layouts.main')
@section('title', 'User | My Accounts')
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
                                    <a href="{{ route('user.addaccount')}}" class="nav-link active" id="account-tab"   role="tab" aria-controls="account"
                                        aria-selected="true">Add Account</a>
                                </li>

                            </ul>
                            <div class="tab-content mt-40" >
                                <div class="tab-pane fade show active" id="account" role="tabpanel"
                                    aria-labelledby="account-tab">

                                     <div class="table-responsive" style="min-height:60vh;">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Account Name</th>
                                                    <th>Account Number</th>
                                                    <th>Account Type</th>
                                                    <th>Opening Balance</th>
                                                    <th>Current Balance</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($accounts as $key=>$account)
                                                    <tr>
                                                        <td>{{++$key }}</td>
                                                        <td>{{ucwords($account->account_name) }}</td>
                                                        <td>{{$account->account_no }}</td>
                                                        <td>{{$account->accounttypename->name }}</td>
                                                        <td>{{$account->opening_balance }}</td>
                                                        <td>{{$account->current_balance }}</td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                 Click to select
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                  <li><a class="dropdown-item" href="{{ route('user.topupaccount', $account->id)}}">Top Up Account</a></li>
                                                                  <li><a class="dropdown-item" href="{{ route('user.editaccount', $account->id)}}">Edit Account</a></li>
                                                                  <li><a class="dropdown-item" href="#">All Transactions</a></li>
                                                                </ul>
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
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
