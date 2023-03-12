<div>
    <form wire:submit.prevent="topaccount">
        <div class="row justify-content-between pb-120">

            <div class="col-xl-3 col-lg-4 col-md-5">
                <div class="left-area">

                    <ul>
                        @if ($currentstep == 1)
                            <li><a href="javascript:void(0)" class="single-link active">Select Account</a></li>
                            <li><a href="#" class="single-link two">Enter amount</a></li>
                            <li><a href="#" class="single-link last">Confirm Top Up</a></li>
                        @endif
                        @if ($currentstep == 2)
                            <li><a href="deposit-money.html" class="single-link active">Select Account</a></li>
                            <li><a href="deposit-money-2.html" class="single-link active">Enter amount</a></li>
                            <li><a href="deposit-money-3.html" class="single-link last">Confirm Top Up</a></li>
                        @endif
                        @if ($currentstep == 3)
                            <li><a href="deposit-money.html" class="single-link active">Select Account</a></li>
                            <li><a href="deposit-money-2.html" class="single-link active">Enter amount</a></li>
                            <li><a href="deposit-money-3.html" class="single-link active last">Confirm Top Up</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-md-7">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                @if ($currentstep == 1)
                    <div class="table-area">
                        <div class="head-area">
                            <h4>Select Account</h4>
                        </div>
                        <div class="card-area d-flex flex-wrap">
                            <div class="single-card">
                                <input type="radio" checked wire:model="account_checked" id="visa"
                                    value="{{ $account->id }}" />
                                <label for="visa">
                                    <span class="wrapper"></span>
                                    <img src="{{ asset('assets/images/visa-card.png') }}" alt="image">
                                    <span>{{ $account->account_name }}</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($currentstep == 2)
                    <div class="table-area">
                        <div class="send-banance">
                            <span class="mdr">How much you want to add?</span>
                            <div class="input-area">
                                <input class="xxlr" placeholder="400.00" type="number" wire:model="top_up_amount">
                            </div>
                            @error('top_up_amount')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                            @if (!empty($account_checked))
                                @php
                                    $balance = App\Models\UserAccount::find($account_checked)->first();
                                @endphp
                                <p>Available Balance<b>{{ $balance->current_balance }}</b></p>
                            @endif
                        </div>
                        <div class="send-banance">
                            <span class="mdr">Say something about this transaction?</span>
                            <div class="input-area">
                                <input class="xxlr" placeholder="Received funds from my A business" type="number"
                                    wire:model="transaction_description">
                            </div>
                            @error('transaction_description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                @endif
                @if ($currentstep == 3)
                    <div class="payment-details">
                        <div class="top-area">
                            <h6>Confirm account & amount</h6>
                            <div class="right">
                                <a href="javascript:void(0)">
                                    <i class="icon-h-edit"></i>
                                    Edit
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-8 col-xl-9 col-lg-12">
                                <ul class="details-list">
                                    <li>
                                        <span>Payment System</span>
                                        <b>Paypal</b>
                                    </li>
                                    <li>
                                        <span>Paypal Payment Card</span>
                                        <b>**** **** **** 1182</b>
                                    </li>
                                    <li>
                                        <span>You will receive</span>
                                        <b>400.00 USD</b>
                                    </li>
                                    <li>
                                        <span>Fee</span>
                                        <b>1 USD</b>
                                    </li>
                                    <li>
                                        <span>E-mail</span>
                                        <b><a href="https://pixner.net/cdn-cgi/l/email-protection" class="__cf_email__"
                                                data-cfemail="751310191c161c145b07101c1135100d14180519105b161a18">[email&#160;protected]</a></b>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox-area mt-40 d-flex align-items-center justify-content-center">
                        <input type="checkbox" id="accept" name="accept">
                        <label for="accept">I accept <a href="javascript:void(0)">terms of use</a></label>
                    </div>
                @endif
                <div class="footer-area mt-40">
                    @if ($currentstep == 1)
                        <button type="button" wire:click="increasestep()" class="active">Next</button>
                    @endif
                    @if ($currentstep == 2)
                        <button type="button" wire:click="descreaseStep()">Previous Step</button>
                        <button type="button" wire:click="increasestep()" class="active">Next</button>
                    @endif
                    @if ($currentstep == 3)
                        <button type="button" wire:click="descreaseStep()">Previous Step</button>

                        <button type="submit" wire:click="increasestep()" class="active">Next</button>
                    @endif


                </div>
            </div>
        </div>
    </form>



</div>
