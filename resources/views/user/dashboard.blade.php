@extends('layouts.main')
@section('title', 'User Dashboard')
@section('content')
<div class="overlay pt-120">
    <div class="container-fruid">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="section-content">
                    <div class="acc-details">
                        <div class="top-area">
                            <div class="left-side">
                                <h5>Hi, {{ Auth::user()->name}}</h5>
                                <h2>$30,700.00</h2>
                                <h5 class="receive">Last Received <span>$25,700.00</span></h5>
                            </div>
                            <div class="right-side">
                                <div class="right-top">
                                    <select>
                                        <option value="1">US Dollar</option>
                                        <option value="2">US Dollar</option>
                                        <option value="3">US Dollar</option>
                                    </select>
                                    <div class="dropdown-area">
                                        <button type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/images/icon/option.png') }}"
                                                alt="icon">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdown-item" href="#">Fiat Currency</a></li>
                                            <li><a class="dropdown-item" href="#">crypto Currency</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="right-bottom">
                                    <h4>$30,700.00</h4>
                                    <h5>Payouts</h5>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-area">
                            <div class="left-side">
                                <a href="pay.html" class="cmn-btn">Transfer Money</a>
                                <a href="deposit-money.html" class="cmn-btn">Add Money</a>
                                <a href="withdraw-money-step-1.html" class="cmn-btn">Withdraw</a>
                            </div>
                            <div class="right-side">
                                <div class="dropdown-area">
                                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ asset('assets/images/icon/option.png') }}"
                                            alt="icon">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="recipients.html">Recipients</a>
                                        </li>
                                        <li><a class="dropdown-item" href="receive-step-1.html">Request
                                                Money</a></li>
                                        <li><a class="dropdown-item" href="pay-step-1.html">Send Money</a>
                                        </li>
                                        <li><a class="dropdown-item" href="pay-step-1.html">Bill Pay</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transactions-area mt-40">
                        <div class="section-text">
                            <h5>Transactions</h5>
                            <p>Updated every several minutes</p>
                        </div>
                        <div class="top-area d-flex align-items-center justify-content-between">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="latest-tab" data-bs-toggle="tab"
                                        data-bs-target="#latest" type="button" role="tab"
                                        aria-controls="latest" aria-selected="true">Latest</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="upcoming-tab" data-bs-toggle="tab"
                                        data-bs-target="#upcoming" type="button" role="tab"
                                        aria-controls="upcoming" aria-selected="false">Upcoming</button>
                                </li>
                            </ul>
                            <div class="view-all d-flex align-items-center">
                                <a href="javascript:void(0)">View All</a>
                                <img src="assets/images/icon/right-arrow.png" alt="icon">
                            </div>
                        </div>
                        <div class="tab-content mt-40">
                            <div class="tab-pane fade show active" id="latest" role="tabpanel"
                                aria-labelledby="latest-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name/ Business</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Bangkok Bank</p>
                                                    <p class="mdr">Withdraw to bank account</p>
                                                </th>
                                                <td>
                                                    <p>03:00 PM</p>
                                                    <p class="mdr">10 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="inprogress">In Progress</p>
                                                </td>
                                                <td>
                                                    <p>-$520</p>
                                                    <p class="mdr">$3.0</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Envato Pty Ltd</p>
                                                    <p class="mdr">Marketplace Payment Received</p>
                                                </th>
                                                <td>
                                                    <p>04:30 PM</p>
                                                    <p class="mdr">01 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="completed">Completed</p>
                                                </td>
                                                <td>
                                                    <p>+$450</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Mailchimp</p>
                                                    <p class="mdr">Subscription Service Payment</p>
                                                </th>
                                                <td>
                                                    <p>01:15 PM</p>
                                                    <p class="mdr">25 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="completed">Completed</p>
                                                </td>
                                                <td>
                                                    <p>-$100</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Facebook Ads</p>
                                                    <p class="mdr">Ads Service</p>
                                                </th>
                                                <td>
                                                    <p>07:05 PM</p>
                                                    <p class="mdr">15 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="pending">Pending</p>
                                                </td>
                                                <td>
                                                    <p>$200</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Upwork Escow Inc</p>
                                                    <p class="mdr">Payment payment</p>
                                                </th>
                                                <td>
                                                    <p>04:02 PM</p>
                                                    <p class="mdr">10 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="completed">Completed</p>
                                                </td>
                                                <td>
                                                    <p>$450</p>
                                                    <p class="mdr">$.5</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Ron Stewart</p>
                                                    <p class="mdr">Payment Refund</p>
                                                </th>
                                                <td>
                                                    <p>11:00 PM</p>
                                                    <p class="mdr">21 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="cancelled">Cancelled</p>
                                                </td>
                                                <td>
                                                    <p>+$450</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="upcoming" role="tabpanel"
                                aria-labelledby="upcoming-tab">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name/ Business</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Bangkok Bank</p>
                                                    <p class="mdr">Withdraw to bank account</p>
                                                </th>
                                                <td>
                                                    <p>03:00 PM</p>
                                                    <p class="mdr">10 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="inprogress">In Progress</p>
                                                </td>
                                                <td>
                                                    <p>-$520</p>
                                                    <p class="mdr">$3.0</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Envato Pty Ltd</p>
                                                    <p class="mdr">Marketplace Payment Received</p>
                                                </th>
                                                <td>
                                                    <p>04:30 PM</p>
                                                    <p class="mdr">01 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="completed">Completed</p>
                                                </td>
                                                <td>
                                                    <p>+$450</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Mailchimp</p>
                                                    <p class="mdr">Subscription Service Payment</p>
                                                </th>
                                                <td>
                                                    <p>01:15 PM</p>
                                                    <p class="mdr">25 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="completed">Completed</p>
                                                </td>
                                                <td>
                                                    <p>-$100</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Facebook Ads</p>
                                                    <p class="mdr">Ads Service</p>
                                                </th>
                                                <td>
                                                    <p>07:05 PM</p>
                                                    <p class="mdr">15 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="pending">Pending</p>
                                                </td>
                                                <td>
                                                    <p>$200</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Upwork Escow Inc</p>
                                                    <p class="mdr">Payment payment</p>
                                                </th>
                                                <td>
                                                    <p>04:02 PM</p>
                                                    <p class="mdr">10 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="completed">Completed</p>
                                                </td>
                                                <td>
                                                    <p>$450</p>
                                                    <p class="mdr">$.5</p>
                                                </td>
                                            </tr>
                                            <tr data-bs-toggle="modal" data-bs-target="#transactionsMod">
                                                <th scope="row">
                                                    <p>Ron Stewart</p>
                                                    <p class="mdr">Payment Refund</p>
                                                </th>
                                                <td>
                                                    <p>11:00 PM</p>
                                                    <p class="mdr">21 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p class="cancelled">Cancelled</p>
                                                </td>
                                                <td>
                                                    <p>+$450</p>
                                                    <p class="mdr">No Fees</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="side-items">
                    <div class="single-item">
                        <div class="section-text d-flex align-items-center justify-content-between">
                            <h6>Linked Payment system</h6>
                            <div class="right-side">
                                <div class="dropdown-area">
                                    <button type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <img src="{{ asset('assets/images/icon/option.png') }}"
                                            alt="icon">
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="account.html">Update</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Virtual
                                                card</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="single-card">
                                    <button type="button" class="reg w-100" data-bs-toggle="modal"
                                        data-bs-target="#cardMod">
                                        <img src="{{ asset('assets/images/visa-card.png') }}" alt="image"
                                            class="w-100">
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-card">
                                    <button type="button" class="reg w-100" data-bs-toggle="modal"
                                        data-bs-target="#cardMod">
                                        <img src={{ asset('"assets/images/paylio-card.png') }}" alt="image"
                                            class="w-100">
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-card">
                                    <button type="button" class="reg w-100" data-bs-toggle="modal"
                                        data-bs-target="#cardMod">
                                        <img src="assets/images/paypal-card.png') }}" alt="image"
                                            class="w-100">
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-card">
                                    <button type="button" class="reg w-100" data-bs-toggle="modal"
                                        data-bs-target="#cardMod">
                                        <img src="assets/images/blockchain-card.png') }}" alt="image"
                                            class="w-100">
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-card">
                                    <button type="button" class="reg w-100" data-bs-toggle="modal"
                                        data-bs-target="#addcardMod">
                                        <img src="assets/images/add-new.png') }}" alt="image"
                                            class="w-100">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="section-text d-flex align-items-center justify-content-between">
                            <h6>Payment Analytics</h6>
                            <div class="select-box">
                                <select>
                                    <option>Monthly</option>
                                    <option value="1">Jan</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Mar</option>
                                </select>
                            </div>
                        </div>
                        <div id="chart"></div>
                    </div>
                    <div class="single-item">
                        <div class="section-text d-flex align-items-center justify-content-between">
                            <h6>Recipients</h6>
                            <div class="view-all d-flex align-items-center">
                                <a href="javascript:void(0)">View All</a>
                                <img src="{{ asset('assets/images/icon/right-arrow.png') }}" alt="icon">
                            </div>
                        </div>
                        <ul class="recipients-item">
                            <li>
                                <p class="left d-flex align-items-center">
                                    <img src="{{ asset('assets/images/recipients-1.png') }}" alt="icon">
                                    <span class="info">
                                        <span>Phil King</span>
                                        <span>08:00 AM — 19 August</span>
                                    </span>
                                </p>
                                <p class="right">
                                    <span> +$345</span>
                                    <span>Payment</span>
                                </p>
                            </li>
                            <li>
                                <p class="left d-flex align-items-center">
                                    <img src="{{ asset('assets/images/recipients-2.png') }}" alt="icon">
                                    <span class="info">
                                        <span>Debra Wilson</span>
                                        <span>08:00 AM — 19 August</span>
                                    </span>
                                </p>
                                <p class="right">
                                    <span class="loss">-$850</span>
                                    <span>Refund</span>
                                </p>
                            </li>
                            <li>
                                <p class="left d-flex align-items-center">
                                    <img src="{{ asset('assets/images/recipients-3.png') }}" alt="icon">
                                    <span class="info">
                                        <span>Philip Henry</span>
                                        <span>08:00 AM — 19 August</span>
                                    </span>
                                </p>
                                <p class="right">
                                    <span>+$2.050</span>
                                    <span>Payment</span>
                                </p>
                            </li>
                            <li>
                                <p class="left d-flex align-items-center">
                                    <img src={{ asset('"assets/images/recipients-4.png') }}" alt="icon">
                                    <span class="info">
                                        <span>Erin Garcia</span>
                                        <span>08:00 AM — 19 August</span>
                                    </span>
                                </p>
                                <p class="right">
                                    <span> +$900</span>
                                    <span>Payment</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
