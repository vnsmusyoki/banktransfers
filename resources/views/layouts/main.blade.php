<!doctype html>
<html lang="en">


<!-- Mirrored from pixner.net/paylio/paylio-dashboard/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Mar 2023 01:29:24 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/arafat-font.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugin/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section body-collapse">
        <div class="overlay">
            <div class="container-fruid">
                <div class="row d-flex header-area">
                    <div class="navbar-area d-flex align-items-center justify-content-between">
                        <div class="sidebar-icon">
                            <img src="assets/images/icon/menu.png" alt="icon">
                        </div>
                        <form action="#" class="flex-fill">
                            <div class="form-group d-flex align-items-center">
                                <img src="assets/images/icon/search.png" alt="icon">
                                <input type="text" placeholder="Type to search...">
                            </div>
                        </form>
                        <div class="dashboard-nav">
                            <div class="single-item language-area">
                                <div class="language-btn">
                                    <img src="assets/images/icon/lang.png" alt="icon">
                                </div>
                                <ul class="main-area language-content">
                                    <li>English</li>
                                    <li>Hindi</li>
                                    <li class="active">English (US)</li>
                                    <li>Japanese</li>
                                    <li>Kannada</li>
                                    <li>Lithuanian</li>
                                </ul>
                            </div>
                            <div class="single-item notifications-area">
                                <div class="notifications-btn">
                                    <img src="{{ asset('assets/images/icon/bell.png') }}" class="bell-icon"
                                        alt="icon">
                                </div>
                                <div class="main-area notifications-content">
                                    <div class="head-area d-flex justify-content-between">
                                        <h5>Notifications</h5>
                                        <span class="mdr">4</span>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0)" class="d-flex">
                                                <div class="img-area">
                                                    <img src="{{ asset('assets/images/user-1.png') }}" class="max-un"
                                                        alt="image">
                                                </div>
                                                <div class="text-area">
                                                    <p class="mdr">You received a payment of <b>$134.00</b> from
                                                        <b>Anna
                                                            Green</b></p>
                                                    <p class="mdr time-area">09.39AM</p>
                                                </div>
                                            </a>
                                            <i class="fa-solid fa-caret-right"></i>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="d-flex">
                                                <div class="img-area">
                                                    <img src="{{ asset('assets/images/user-2.png') }}" class="max-un"
                                                        alt="image">
                                                </div>
                                                <div class="text-area">
                                                    <p class="mdr"><b>James Deed</b> requested a payment of
                                                        <b>£890.00</b>
                                                    </p>
                                                    <p class="mdr time-area">08.09AM</p>
                                                </div>
                                            </a>
                                            <i class="fa-solid fa-caret-right"></i>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="d-flex">
                                                <div class="img-area">
                                                    <img src="{{ asset('assets/images/master-card.png') }}"
                                                        class="max-un" alt="image">
                                                </div>
                                                <div class="text-area">
                                                    <p class="mdr">Your new payment method has beed added
                                                        successfully
                                                    </p>
                                                    <p class="mdr time-area">09.39AM</p>
                                                </div>
                                            </a>
                                            <i class="fa-solid fa-caret-right"></i>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="d-flex">
                                                <div class="img-area">
                                                    <img src="{{ asset('assets/images/user-3.png') }}" class="max-un"
                                                        alt="image">
                                                </div>
                                                <div class="text-area">
                                                    <p class="mdr">You received a payment of <b>$250.00</b> from
                                                        Goerge
                                                        Michael</p>
                                                    <p class="mdr time-area">Yesterday</p>
                                                </div>
                                            </a>
                                            <i class="fa-solid fa-caret-right"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-item user-area">
                                <div class="profile-area d-flex align-items-center">
                                    <span class="user-profile">
                                        <img src="{{ asset('assets/images/avatar.png') }}" alt="User">
                                    </span>
                                    <i class="fa-solid fa-sort-down"></i>
                                </div>
                                <div class="main-area user-content">
                                    <div class="head-area d-flex align-items-center">
                                        <div class="profile-img">
                                            <img src="{{ asset('assets/images/avatar-2.png') }}" alt="User">
                                        </div>
                                        <div class="profile-head">
                                            <a href="javascript:void(0)">
                                                <h5>Kevin Martin</h5>
                                            </a>
                                            <p class="wallet-id">Wallet ID: 6264849965</p>
                                        </div>
                                    </div>
                                    <ul>
                                        <li class="border-area">
                                            <a href="account.html"><i class="fas fa-cog"></i>Settings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)"><i class="fas fa-sign-out"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-wrapper">
                        <div class="close-btn">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="sidebar-logo">
                            {{-- <a href="dashboard.html"><img src="{{ asset('assets/images/logo.png') }}"
                                    alt="logo"></a> --}}
                            <a href="dashboard.html">
                                    </a>
                        </div>
                        <ul>
                            <li class="active">
                                <a href="dashboard.html">
                                    <img src="{{ asset('assets/images/icon/dashboard.png') }}" alt="Dashboard">
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="transactions.html">
                                    <img src="{{ asset('assets/images/icon/transactions.png') }}" alt="Transactions">
                                    <span>Transactions</span>
                                </a>
                            </li>
                            <li>
                                <a href="pay.html">
                                    <img src="{{ asset('assets/images/icon/pay.png') }}" alt="Pay">
                                    <span>Pay</span>
                                </a>
                            </li>
                            <li>
                                <a href="receive-step-1.html">
                                    <img src="{{ asset('assets/images/icon/receive.png') }}" alt="Receive">
                                    <span>Receive</span>
                                </a>
                            </li>
                            <li>
                                <a href="money-exchange.html">
                                    <img src="{{ asset('assets/images/icon/exchange.png') }}" alt="Exchange">
                                    <span>Exchange</span>
                                </a>
                            </li>
                            <li>
                                <a href="recipients.html">
                                    <img src="{{ asset('assets/images/icon/recipients.png') }}" alt="Recipients">
                                    <span>Recipients</span>
                                </a>
                            </li>
                            <li>
                                <a href="crypto.html">
                                    <img src="{{ asset('assets/images/icon/crypto.png') }}" alt="Crypto">
                                    <span>Crypto</span>
                                </a>
                            </li>
                            <li>
                                <a href="deposit-money.html">
                                    <img src="{{ asset('assets/images/icon/deposit.png') }}" alt="Deposit">
                                    <span>Deposit Money</span>
                                </a>
                            </li>
                            <li>
                                <a href="withdraw-money-step-1.html">
                                    <img src="{{ asset('assets/images/icon/withdraw.png') }}" alt="Withdraw">
                                    <span>Withdraw Money</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="bottom-item">
                            <li>
                                <a href="account.html">
                                    <img src="{{ asset('assets/images/icon/account.png') }}" alt="Account">
                                    <span>Account</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('assets/images/icon/support.png') }}" alt="Support">
                                    <span>Support</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('assets/images/icon/quit.png') }}" alt="Quit">
                                    <span>Quit</span>
                                </a>
                            </li>
                        </ul>
                        <div class="pt-120">
                            <div class="invite-now">
                                <div class="img-area">
                                    <img src="{{ asset('assets/images/invite-now-illus.png') }}" alt="Image">
                                </div>
                                <p>Invite your friend and get $25</p>
                                <a href="javascript:void(0)" class="cmn-btn">Invite Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse">
        @yield('content')
    </section>
    <!-- Dashboard Section end -->

    <!-- Card Popup start -->
    <div class="card-popup">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="cardMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-center">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="main-content">
                                    <div class="top-area mb-40 mt-40 text-center">
                                        <div class="card-area mb-30">
                                            <img src="assets/images/visa-card-2.png" alt="image">
                                        </div>
                                        <div class="text-area">
                                            <h5>Paylio payment Card </h5>
                                            <p>Linked: 01 Jun 2021</p>
                                        </div>
                                    </div>
                                    <div class="tab-area d-flex align-items-center justify-content-between">
                                        <ul class="nav nav-tabs mb-30" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="btn-link" id="cancel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#cancel" type="button" role="tab"
                                                    aria-controls="cancel" aria-selected="false">
                                                    <img src="assets/images/icon/limit.png" alt="icon">
                                                    Set transfer limit
                                                </button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="d-none" id="limit-tab" data-bs-toggle="tab"
                                                    data-bs-target="#limit" type="button" role="tab"
                                                    aria-controls="limit" aria-selected="true"></button>
                                            </li>
                                            <li>
                                                <button>
                                                    <img src="assets/images/icon/remove.png" alt="icon">
                                                    Remove from Linked
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content mt-30">
                                        <div class="tab-pane fade show active" id="limit" role="tabpanel"
                                            aria-labelledby="limit-tab">
                                            <div class="bottom-area">
                                                <p class="history">Transaction History : <span>20</span></p>
                                                <ul>
                                                    <li>
                                                        <p class="left">
                                                            <span>03:00 PM</span>
                                                            <span>17 Oct, 2020</span>
                                                        </p>
                                                        <p class="right">
                                                            <span>$160.48</span>
                                                            <span>Withdraw</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="left">
                                                            <span>01:09 PM</span>
                                                            <span>15 Oct, 2021</span>
                                                        </p>
                                                        <p class="right">
                                                            <span>$106.58</span>
                                                            <span>Withdraw</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="left">
                                                            <span>04:00 PM</span>
                                                            <span>12 Oct, 2020</span>
                                                        </p>
                                                        <p class="right">
                                                            <span>$176.58</span>
                                                            <span>Withdraw</span>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p class="left">
                                                            <span>06:00 PM</span>
                                                            <span>25 Oct, 2020</span>
                                                        </p>
                                                        <p class="right">
                                                            <span>$167.85</span>
                                                            <span>Withdraw</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="cancel" role="tabpanel"
                                            aria-labelledby="cancel-tab">
                                            <div class="main-area">
                                                <div class="transfer-area">
                                                    <p>Set a transfer limit for paylio payment Card</p>
                                                    <p class="mdr">Transfer Limit</p>
                                                </div>
                                                <form action="#">
                                                    <div class="input-area">
                                                        <input class="xxlr" placeholder="400.00" type="number">
                                                        <select>
                                                            <option value="1">USD</option>
                                                            <option value="2">USD</option>
                                                            <option value="3">USD</option>
                                                        </select>
                                                    </div>
                                                    <div
                                                        class="bottom-area d-flex align-items-center justify-content-between">
                                                        <a href="javascript:void(0)" class="cmn-btn cancel">Cancel and
                                                            Back</a>
                                                        <a href="javascript:void(0)" class="cmn-btn">Confirm Transfer
                                                            Limit</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Popup start -->

    <!-- Add Card Popup start -->
    <div class="add-card">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="addcardMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-between">
                                    <h6>Add Card</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <form action="#">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label for="cardNumber">Card Number</label>
                                                <input type="text" id="cardNumber"
                                                    placeholder="5890 - 6858 - 6332 - 9843">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-input">
                                                <label for="cardHolder">Card Holder</label>
                                                <input type="text" id="cardHolder" placeholder="Alfred Davis">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label for="month">Month</label>
                                                <input type="text" id="month" placeholder="12">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-input">
                                                <label for="year">Year</label>
                                                <input type="text" id="year" placeholder="2025">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="btn-border w-100">
                                                <button class="cmn-btn w-100">Add Card</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Card Popup start -->

    <!-- Transactions Popup start -->
    <div class="transactions-popup">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="transactionsMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-between">
                                    <h5>Transaction Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                                </div>
                                <div class="main-content">
                                    <div class="row">
                                        <div class="col-sm-5 text-center">
                                            <div class="icon-area">
                                                <img src="assets/images/icon/transaction-details-icon.png') }}"
                                                    alt="icon">
                                            </div>
                                            <div class="text-area">
                                                <h6>Envato Pty Ltd</h6>
                                                <p>16 Jan 2022</p>
                                                <h3>717.14 USD</h3>
                                                <p class="com">Completed</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="right-area">
                                                <h6>Transaction Details</h6>
                                                <ul class="payment-details">
                                                    <li>
                                                        <span>Payment Amount</span>
                                                        <span>718.64 USD</span>
                                                    </li>
                                                    <li>
                                                        <span>Fee</span>
                                                        <span>1.50 USD</span>
                                                    </li>
                                                    <li>
                                                        <span>Total Amount</span>
                                                        <span>717.14 USD</span>
                                                    </li>
                                                </ul>
                                                <ul class="payment-info">
                                                    <li>
                                                        <p>Payment From</p>
                                                        <span class="mdr">Envato Pty Ltd</span>
                                                    </li>
                                                    <li>
                                                        <p>Payment Description</p>
                                                        <span class="mdr">Envato Feb 2022 Member Payment</span>
                                                    </li>
                                                    <li>
                                                        <p>Transaction ID:</p>
                                                        <span class="mdr">6559595979565959895559595</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Transactions Popup start -->

    <!--==================================================================-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/waypoint.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/plugin.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>