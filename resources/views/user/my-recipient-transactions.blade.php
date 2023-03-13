@extends('layouts.main')
@section('title', 'User | Recipient  Transactions')
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
                                    <form action="#" class="flex-fill">
                                        <div class="form-group d-flex align-items-center">
                                            <img src="{{ asset('assets/images/icon/search.png') }}" alt="icon">
                                            <input type="text" placeholder="Type to search...">
                                        </div>
                                    </form>
                                </div>
                                <div class="right-area w-100 d-flex align-items-center">
                                    <div class="single-item">
                                        <select>
                                            <option value="1">Sort by: A-Z</option>
                                        </select>
                                    </div>
                                    <div class="single-item">
                                        <select>
                                            <option>All Status</option>
                                            <option value="1">Status 1</option>
                                        </select>
                                    </div>
                                    <div class="single-item">
                                        <button data-bs-toggle="modal" data-bs-target="#recipientsMod">
                                            <i class="icon-e-plus"></i>
                                            New Recipients
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Amount Transacted</th>
                                            <th scope="col">Date Transacted</th>
                                            <th scope="col">Trans. Category</th>
                                            <th scope="col">Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transactions as $item)
                                            <tr>
                                                <th scope="row">
                                                    <div class="info-area">
                                                        <div class="img-area">
                                                            <img src="https://ui-avatars.com/api/?name={{ $item->first_name }} {{ $item->last_name }}"
                                                                alt="image">
                                                        </div>
                                                        <div class="text-area">
                                                            <p>{{ $item->first_name }} {{ ucwords($item->last_name) }}</p>
                                                            <p class="mdr"><a href="#"
                                                                    class="__cf_email__">{{ $item->email }}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td>
                                                    <p>03:00 PM</p>
                                                    <p class="mdr">10 Mar 2022</p>
                                                </td>
                                                <td>
                                                    <p>$106.58</p>
                                                    <p class="mdr">Received</p>
                                                </td>
                                                <td class="btn-item">
                                                    <a href="{{ route('user.myrecipientstransactions', $item->slug) }}">All
                                                        Transactions</a>
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

    <!-- Add Recipients Popup start -->
    <div class="add-recipients">
        <div class="container-fruid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="recipientsMod" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header justify-content-between">
                                    <h6>Add Recipients</h6>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                            class="fa-solid fa-xmark"></i></button>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="company-tab" data-bs-toggle="tab"
                                            data-bs-target="#company" type="button" role="tab"
                                            aria-controls="company" aria-selected="true">
                                            <span class="icon-area">
                                                <img src="{{ asset('assets/images/icon/company-icon.png') }}"
                                                    alt="icon">
                                            </span>
                                            Add Recipient Profile
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="company" role="tabpanel"
                                        aria-labelledby="company-tab">

                                        @livewire('user.add-recipient')
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
@endsection
