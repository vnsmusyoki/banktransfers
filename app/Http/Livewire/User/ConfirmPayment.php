<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class ConfirmPayment extends Component
{
    public $paymentrecord;
    public $id_number;
    public function mount($paymentslug)
    {
        $this->paymentrecord = $paymentslug;
    }
    public function render()
    {
        // $transaction = AccountTransaction::where('user_id', auth()->user()->id)->where('slug', $transslug)->first();

        return view('livewire.user.confirm-payment',);
    }
    public function completepayment()
    {
        $this->validate([
            'id_number' => 'required|digits:8'
        ]);
    }
}
