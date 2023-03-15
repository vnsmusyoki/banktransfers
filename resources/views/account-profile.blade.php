@extends('layouts.main')
@section('title', 'Account Profile')
@section('content')
    <section class="dashboard-section body-collapse account">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-md-6">
                            <div class="owner-details">
                                <div class="profile-area">
                                    <div class="profile-img">
                                        <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" alt="image"
                                            style="width:100px;height:100px;border-radius:50%">
                                    </div>
                                    <div class="name-area">
                                        <h6>{{ Auth::user()->name }}</h6>
                                        <p class="active-status">Active</p>
                                    </div>
                                </div>
                                <div class="owner-info">
                                    <ul>
                                        <li>
                                            <p>Account ID:</p>
                                            <span class="mdr">{{ Auth::user()->id_number }}</span>
                                        </li>
                                        <li>
                                            <p>Joined:</p>
                                            <span class="mdr">{{ Auth::user()->created_at->format('M, d Y') }}</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="owner-action">
                                    <a href="javascript:void(0)">
                                        <img src="assets/images/icon/logout.png" alt="image">
                                        Logout
                                    </a>
                                    {{-- <a href="javascript:void(0)" class="delete">
                                    <img src="assets/images/icon/delete-2.png" alt="image">
                                    Delete Account
                                </a> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9 col-xl-8">
                            <div class="tab-main">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="account-tab" data-bs-toggle="tab"
                                            data-bs-target="#account" type="button" role="tab" aria-controls="account"
                                            aria-selected="true">Account</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="security-tab" data-bs-toggle="tab"
                                            data-bs-target="#security" type="button" role="tab"
                                            aria-controls="security" aria-selected="false">Security</button>
                                    </li>

                                </ul>
                                <div class="tab-content mt-40">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">
                                        <div class="upload-avatar">
                                            <div class="avatar-left d-flex align-items-center">
                                                <div class="profile-img">
                                                    {{-- <img src="assets/images/owner-profile-2.png" alt="image"> --}}
                                                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                                        alt="image" style="width:100px;height:100px;border-radius:50%">
                                                </div>
                                                <div class="instraction">
                                                    <h6>Your Avatar</h6>
                                                    <p>Profile picture size: 400px x 400px</p>
                                                </div>
                                            </div>
                                            <div class="avatar-right">

                                            </div>
                                        </div>
                                        <form action="#">
                                            <div class="row justify-content-center">
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <label for="fName">Full Name</label>
                                                        <input type="text" id="fName"
                                                            placeholder="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <label for="email">Email</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-12">
                                                                <input type="text" id="email"
                                                                    placeholder="{{ Auth::user()->email }}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <label for="phone">Phone</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-12">
                                                                <input type="text" id="phone"
                                                                    placeholder="{{ Auth::user()->phone_number }}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="single-input">
                                                        <label for="phone">Id Number</label>
                                                        <div class="row input-status d-flex align-items-center">
                                                            <div class="col-12">
                                                                <input type="text" id="phone"
                                                                    placeholder="{{ Auth::user()->id_number }}">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="single-input">
                                                        <label for="address">Address</label>
                                                        <input type="text" id="address"
                                                            placeholder="{{ Auth::user()->physical_address }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="btn-border">
                                                        <button class="cmn-btn">Account</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="security" role="tabpanel"
                                        aria-labelledby="security-tab">

                                        <div class="change-pass mb-40">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h5>Change Password</h5>
                                                    <p>You can always change your password for security reasons or reset
                                                        your password in case you forgot it.</p>
                                                    <a href="javascript:void(0)">Forgot password?</a>
                                                </div>
                                                <div class="col-sm-6">
                                                    <form action="{{ route('updatepassword') }}" method="POST">
                                                        @csrf
                                                        <div class="row justify-content-center">

                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <label for="new-password">New password</label>
                                                                    <input type="text" id="new-password"
                                                                        placeholder="New password" name="password">
                                                                    @error('password')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="single-input">
                                                                    <label for="confirm-password">Confirm New
                                                                        password</label>
                                                                    <input type="text" id="confirm-password"
                                                                        placeholder="Confirm New password"
                                                                        name="password_confirmation">
                                                                    @error('password_confirmation')
                                                                        <small class="text-danger">{{ $message }}</small>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="btn-border w-100">
                                                                    <button class="cmn-btn w-100">Update password</button>
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
                </div>
            </div>
        </div>
    </section>

@endsection
