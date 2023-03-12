@extends('layouts.main')
@section('title', 'User | Account Top Up')
@section('content')
     <!-- Dashboard Section start -->
     <section class="dashboard-section body-collapse pay step crypto deposit-money">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="head-area d-flex align-items-center justify-content-between">
                        <h4>Top Up Account</h4>
                        <div class="icon-area">
                            <img src="{{ asset('assets/images/icon/support-icon.png') }}" alt="icon">
                        </div>
                    </div>
                    @livewire('user.accout-top-up', ['accountslug' => $account->id])
                
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Section end -->
@endsection
