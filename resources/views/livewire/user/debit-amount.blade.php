<div>
    <form wire:submit.prevent="debitamount" autocomplete="off">
        <div class="send-banance">
            <span class="mdr">You Send</span>
            <div class="input-area">
                <input class="xxlr" placeholder="400.00" type="number" wire:model="account_amount">
            </div>
            <div class="input-area">
                <select wire:model="account_selected">
                    <option value="">click to select</option>
                    @foreach ($accounts as $item)
                        <option value="{{ $item->id }}">{{ $item->account_name }}</option>
                    @endforeach
                </select>
            </div>
            @if ($account_selected)
                {{ $account_selected }}
                @php
                    $account = App\Models\UserAccount::where(['user_id' => Auth::user()->id, 'id' => $account_selected])->first();
                @endphp
                <p>Available Balance<b>${{ $account->current_balance }}</b></p>
            @endif

        </div>
        <ul class="total-fees">
            <li>Total Fees</li>
            <li>Free</li>
        </ul>
        <ul class="total-fees pay">
            <li>
                <h5>Total To Pay</h5>
            </li>
            <li>
                <h5>400.00 USD</h5>
            </li>
        </ul>
        <div class="footer-area mt-40">
            <a href="pay-step-1.html">Previous Step</a>
            <a href="pay-step-3.html" class="active">Next</a>
        </div>
    </form>
</div>
