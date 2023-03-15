@extends('layouts.main')
@section('title', 'Admin | My Customers')
@section('content')

    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse transactions recipients">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="transactions-main">
                            <div class="filters-item d-flex justify-content-lg-between">
                                <div class="single-item search-area">

                                </div>

                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">Total Accounts</th>
                                            <th scope="col" colspan="3">Accounts</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $item)

                                            <tr>
                                                <th scope="row">
                                                    <div class="info-area">
                                                        <div class="img-area">
                                                            <img src="https://ui-avatars.com/api/?name={{ $item->name }} "
                                                                alt="image">
                                                        </div>
                                                        <div class="text-area">
                                                            <p>{{ $item->name  }}</p>
                                                            <p class="mdr"><a href="#"
                                                                    class="__cf_email__">{{ $item->email }}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>

                                                        <p>{{ $item->email }}</p>


                                                </td>
                                                <td>
                                                    <p class="mdr">{{$item->phone_number}}</p>
                                                </td>
                                                <td colspan="3">
                                                   @php
                                                       $accounts = App\Models\UserAccount::where('user_id', $item->id)->get();
                                                   @endphp
                                                   {{$accounts->count()}}

                                                </td>
                                                <td colspan="3">

                                                   @foreach ($accounts as $account)
                                                        {{ucwords($account->account_name)}},
                                                   @endforeach

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
    </section>
    <!-- Dashboard Section end -->

@endsection
