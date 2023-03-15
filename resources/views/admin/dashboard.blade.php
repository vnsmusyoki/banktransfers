@extends('layouts.main')
@section('title', 'Admin Dashboard')
@section('content')
    <section class="dashboard-section body-collapse">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="section-content">
                            <div class="acc-details">
                                <div class="top-area">
                                    <div class="left-side">
                                        <h5>Hi, {{ Auth::user()->name }}</h5>
                                        <h2>${{ $totalcredit }}.00</h2>
                                        @if (!empty($lastcredittransaction))
                                            <h5 class="receive">Last Credited Amount
                                                <span>${{ $lastcredittransaction->amount }}.00</span>
                                            </h5>
                                        @endif
                                    </div>
                                    <div class="right-side">

                                        <div class="right-bottom">
                                            <h4>${{ $totaldebit }}.00</h4>
                                            <h5>Payouts</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="transactions-area mt-40">
                                <div class="section-text">
                                    <h5>Transactions</h5>
                                </div>

                                <div class="tab-content mt-40">
                                    <div class="tab-pane fade show active" id="latest" role="tabpanel"
                                        aria-labelledby="latest-tab">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Customer</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transactions as $item)
                                                        <tr>
                                                            <th scope="row">
                                                                <p>{{ $item->accusers->name }}</p>
                                                                <p class="mdr">{{ $item->description }}</p>
                                                            </th>
                                                            <td>
                                                                <p>{{ $item->created_at->format('h:i A') }}</p>
                                                                <p class="mdr">{{ $item->created_at->format('M, d Y') }}
                                                                </p>
                                                            </td>
                                                            <td>
                                                                @if ($item->status == null)
                                                                    <p class="completed">Completed</p>
                                                                @else
                                                                    <p class="inprogress">In Progress</p>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($item->transaction_category == 'credit')
                                                                    <p>Credit</p>
                                                                @else
                                                                    <p class="loss">Debit</p>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                @if ($item->transaction_category == 'credit')
                                                                    <p>+${{ $item->amount }}</p>
                                                                @else
                                                                    <p class="loss">-${{ $item->amount }}</p>
                                                                @endif
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
                    <div class="col-xl-4 col-lg-5">
                        <div class="side-items">

                            <div class="single-item">
                                <div class="section-text d-flex align-items-center justify-content-between">
                                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                    <script type="text/javascript">
                                        google.charts.load("current", {
                                            packages: ["corechart"]
                                        });
                                        google.charts.setOnLoadCallback(drawChart);

                                        function drawChart() {

                                            var data = google.visualization.arrayToDataTable({{ Js::from($result) }});

                                            var options = {
                                                title: '',
                                                pieHole: 0.1,
                                                // is3D: true,
                                                legend: 'none',
                                            };

                                            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                                            chart.draw(data, options);
                                        }
                                    </script>
                                    <div>
                                        <div id="piechart_3d" style="width: 100%; height: 400px"></div>
                                    </div>
                                </div>
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
                                    @foreach ($transactions as $item)
                                        <li>
                                            <p class="left d-flex align-items-center">
                                                <img src="{{ asset('assets/images/recipients-1.png') }}" alt="icon">
                                                <span class="info">
                                                    @if (!empty($item->recipient_id))
                                                        <span>{{ $item->recipientaccount->first_name }}
                                                            {{ $item->recipientaccount->last_name }}</span>
                                                    @endif
                                                    <span>{{ $item->created_at->format('h:i A') }} -
                                                        {{ $item->created_at->format('d M') }}</span>
                                                </span>
                                            </p>
                                            <p class="right">
                                                @if ($item->transaction_category == 'credit')
                                                    <span> +${{ $item->amount }}</span>
                                                @else
                                                    <span class="loss"> -${{ $item->amount }}</span>
                                                @endif
                                                <span>Payment</span>
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
