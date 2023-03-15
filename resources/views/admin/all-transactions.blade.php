@extends('layouts.main')
@section('title', 'Admin | All Account Transactions')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <section class="dashboard-section body-collapse account">
        <div class="overlay pt-120">
            <div class="container-fruid">
                <div class="main-content">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12">
                            <div class="tab-main">

                                <div class="tab-content mt-40">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel"
                                        aria-labelledby="account-tab">

                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Customer</th>
                                                        <th>Date</th>
                                                        <th>Account</th>
                                                        <th>Transaction Type</th>
                                                        <th>Credit</th>
                                                        <th>Debit</th>
                                                        <th>Balance</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($transactions as $key => $trans)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ $trans->accusers->name }}</td>
                                                            <td>{{ ucwords($trans->created_at->format('M, d Y, h:i A')) }}
                                                            </td>
                                                            {{-- <td>fr</td> --}}
                                                            <td style="text-transform:uppercase;">
                                                                {{ ucwords($trans->acctaccount->account_name) }}</td>
                                                            <td>{{ ucwords($trans->transaction_category) }}</td>
                                                            <td>
                                                                @if ($trans->transaction_category == 'credit')
                                                                    <span class="text-success">+ $
                                                                        {{ $trans->amount }}</span>
                                                                @endif

                                                            </td>
                                                            <td>

                                                                @if ($trans->transaction_category == 'debit')
                                                                    <span class="text-warning">- $
                                                                        {{ $trans->amount }}</span>
                                                                @endif
                                                            </td>
                                                            <td>$ {{ $trans->new_balance }}</td>

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
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'excel',
                        text: 'Export to Excel'
                    },
                    {
                        extend: 'csv',
                        text: 'Export to CSV'
                    },
                    {
                        extend: 'pdf',
                        text: 'Export to PDF'
                    },
                    {
                        extend: 'copy',
                        text: 'Copy'
                    },
                    {
                        extend: 'print',
                        text: 'Print'
                    }
                ]
            });
        });
    </script>
@endsection
