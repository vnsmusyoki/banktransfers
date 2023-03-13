@extends('layouts.main')
@section('title', 'User | Make Transaction')
@section('content')


    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse pay step">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="head-area d-flex align-items-center justify-content-between">
                        <h4>Make a Payment</h4>
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/icon/support-icon.png') }}" alt="icon">
                        </div>
                    </div>
                    <div class="choose-recipient">
                        <div class="step-area">
                            <span class="mdr">Step 1 of 3</span>
                            <h5>Choose Recipient</h5>
                        </div>

                        <p class="recipients-item">{{ $recipients->count() }}Recipients</p>
                    </div>
                    <form action="#" class="flex-fill">
                        <div class="form-group d-flex align-items-center">
                            <img src="{{ asset('assets/images/icon/search.png') }}" alt="icon">
                            <input type="text" placeholder="Enter email, name or company">
                        </div>
                    </form>
                    <div class="user-select">
                        @foreach ($recipients as $item)
                            <div class="single-user">
                                <div class="left d-flex align-items-center">
                                    <div class="img-area">
                                        <img src="https://ui-avatars.com/api/?name={{ $item->first_name }} {{ $item->last_name }}"
                                            alt="image">
                                    </div>
                                    <div class="text-area">
                                        <p>{{ ucwords($item->first_name) }} {{ ucwords($item->last_name) }}</p>
                                        <span class="mdr"><a href="#" class="__cf_email__"
                                                data-cfemail="">{{ $item->email }}</a></span>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="{{ route('user.selectrecipientaccount', $item->slug)}}">Choose</a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

@endsection
