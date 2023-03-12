@extends('layouts.main')
@section('title', 'User | Add New Account')
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

                                        <form action="{{ route('user.storeaccount') }}" method="POST" autocomplete="off">
                                            @csrf
                                            <div class="row justify-content-center">
                                                <div class="col-md-4">
                                                    <div class="single-input">
                                                        <label for="fName">Account Name</label>
                                                        <input type="text" id="fName" placeholder="Account XXX"
                                                            name="account_name" value="{{ old('account_name') }}">

                                                    </div>
                                                    @error('account_name')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="single-input">
                                                        <label for="lName">Account Number</label>
                                                        <input type="number"  min="100000" max="999999" id="lName" placeholder="XXXXXX"
                                                            name="account_number" value="{{ old('account_number') }}">
                                                    </div>
                                                    @error('account_number')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="single-input" style="padding-top:20px;">
                                                        <select name="account_type" class="mt-6 w-100">
                                                            <option value="">click to select account Type</option>
                                                            @foreach ($acctypes as $item)
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('account_type')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror

                                                </div>


                                                <div class="col-md-12">
                                                    <div class="btn-border">
                                                        <button class="cmn-btn" type="submit">Create New Account</button>
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
        </div>
    </section>
@endsection
