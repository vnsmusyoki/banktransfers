@extends('layouts.main')
@section('title', 'User | Select Amount')
@section('content')



    <!-- Dashboard Section start -->
    <section class="dashboard-section body-collapse pay step step-2">
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
                            <span class="mdr">Step 2 of 3</span>
                            <h5>Set Amount of transfer</h5>
                        </div>
                        <div class="user-select">
                            <div class="single-user">
                                <div class="left d-flex align-items-center">
                                    <div class="img-area">
                                        <img src="https://ui-avatars.com/api/?name={{ $recipient->first_name }} {{ $recipient->last_name }}" alt="image">
                                    </div>
                                    <div class="text-area">
                                        <p>{{ $recipient->first_name }} {{ $recipient->last_name }}</p>
                                        <span class="mdr"><a href="#" class="__cf_email__"  >{{$recipient->email }}</a></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @livewire('user.debit-amount', ['recipientslug' => $recipient->slug])

                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->

@endsection
