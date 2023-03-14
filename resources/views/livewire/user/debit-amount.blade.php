<div>
    <form wire:submit.prevent="debitamount" autocomplete="off">
        <div class="row">
            {{-- <div class="col-lg-4">
                <div class="form-group">
                    <label for="">ckmc</label>
                    <input type="text" class="form-control" name="" placeholder="45">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <select wire:model="account_selected" id="" class="form-control">
                        <option value="">click to select account</option>
                        @foreach ($accounts as $item)
                                        <option value="{{ $item->id }}">{{ $item->account_name }}</option>
                                    @endforeach
                    </select>
                    {{ $account_selected }}
                    @if ($account_selected)

                    @php
                        $account = App\Models\UserAccount::where(['user_id' => Auth::user()->id, 'id' => $account_selected])->first();
                    @endphp
                    <p>Available Balance<b>${{ $account->current_balance }}</b></p>
                @endif
                </div>
            </div> --}}
            <div class="col-xl-12">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="transactions-main">
                    <div class="filters-item d-flex justify-content-lg-between">
                        <div class="single-item search-area">
                            <div class="form-group d-flex align-items-center">
                                <input type="text" min="1" placeholder="Say something about this transaction"
                                    wire:model="transaction_description">
                            </div>
                        </div>
                    </div>
                    <div class="filters-item d-flex justify-content-lg-between">

                        <div class="single-item search-area">
                            <div class="form-group d-flex align-items-center">
                                <input type="number" min="1" placeholder="Select Amount"
                                    wire:model="selected_amount">
                            </div>
                        </div>
                        <div class="right-area w-100 d-flex align-items-center">
                            <div class="single-item">
                                <select wire:model="account_selected" id="" class="form-control">
                                    <option value="">click to select account</option>
                                    @foreach ($accounts as $item)
                                        <option value="{{ $item->id }}">{{ $item->account_name }}</option>
                                    @endforeach
                                </select>

                                @if ($account_selected)
                                    @php
                                        $account = App\Models\UserAccount::where(['user_id' => Auth::user()->id, 'id' => $account_selected])->first();
                                    @endphp
                                    <p>Available Balance<b>${{ $account->current_balance }}</b></p>
                                @endif
                            </div>

                            <div class="single-item">
                                <button type="submit" class="btn btn-success">
                                    Proceed With Payment
                                </button>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <ul class="total-fees pay">
            <li>
                <h5>Total To Pay</h5>
            </li>
            <li>
                @if (!empty($selected_amount))
                    <h5>{{ $selected_amount }} USD</h5>
                @endif

            </li>
        </ul>

    </form>
</div>
