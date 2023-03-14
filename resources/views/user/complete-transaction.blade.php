@extends('layouts.main')
@section('title', 'User | Complete Transaction')
@section('content')
    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse pay step step-2 step-3">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="head-area d-flex align-items-center justify-content-between">
                        <h4>Make a Payment</h4>
                        <div class="icon-area">
                            <img src="https://ui-avatars.com/api/?name={{ $transaction->recipientaccount->first_name }} {{ $transaction->recipientaccount->last_name }}"
                                alt="image" style="height:80px;width:80px;border-radius:50%;">

                        </div>
                    </div>
                    <div class="choose-recipient">
                        <div class="step-area">
                            <span class="mdr">Step 3 of 3</span>
                            <h5>Confirm Your Transfer</h5>
                        </div>
                        <div class="user-select">
                            <div class="single-user">
                                <div class="left d-flex align-items-center">
                                    <div class="img-area">
                                        <img src="https://ui-avatars.com/api/?name={{ $transaction->recipientaccount->first_name }} {{ $transaction->recipientaccount->last_name }}"
                                            alt="image" style="height:80px;width:80px;border-radius:50%;">
                                    </div>
                                    <div class="text-area">
                                        <p>{{ $transaction->recipientaccount->first_name }}
                                            {{ $transaction->recipientaccount->last_name }}</p>
                                        <span class="mdr"><a href="#"
                                                class="__cf_email__">{{ $transaction->recipientaccount->email }}</a></span>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="top-area">
                            <h6>Payment Details</h6>
                            <div class="right">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card" role="tabpanel" aria-labelledby="transfer-tab">
                                    <div class="modal-content">

                                        <div class="main-content">
                                            <h4>Confirm Transfer!</h4>
                                            <p> Please enter your ID Number to authorize this transaction in the text
                                                box below</p>
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <form method="POST" action="{{ route('user.updatecompletetransaction') }}">
                                                @csrf
                                                <input type="hidden" name="transaction_id" value="{{ $transaction->slug}}">
                                                <div class="userInput">
                                                    <input type="number" name="id_number" placeholder="2345635"
                                                        style="border-color:black !important;">
                                                </div>
                                                {{-- <a href="javascript:void(0)">Don’t receive a code?</a> --}}
                                                <button class="mt-60 btn btn-success" type="submit">Confirm
                                                    Transaction</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <ul class="details-list">
                                    <li>
                                        <span>You Send</span>
                                        <b>{{ $transaction->amount }}.00 </b>
                                    </li>
                                    <li>
                                        <span>Recipient gets</span>
                                        <b>{{ $transaction->amount }}.00 </b>
                                    </li>

                                    <li>
                                        <span>Fee</span>
                                        <b>Free</b>
                                    </li>
                                    <li>
                                        <span>Purpose</span>
                                        <b>{{ $transaction->description }}</b>
                                    </li>
                                    <li>
                                        <span>Transfer was be initialised on </span>

                                        <b>{{ $transaction->created_at->format('M, d Y') }} at
                                            {{ $transaction->created_at->format('h:i A') }}</b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

@endsection
