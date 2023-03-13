<?php

namespace App\Http\Livewire\User;

use App\Models\UserAccount;
use App\Models\UserRecipient;
use Livewire\Component;

class DebitAmount extends Component
{
    public $account_selected;
    public $account_amount;
    public $selectedrecipient;
    public function mount($recipientslug){
        $this->selectedrecipient = $recipientslug;
    }
    public function render()
    {
        $recipient = UserRecipient::where('user_id', auth()->user()->id)->where('slug', $this->selectedrecipient)->first();

        $accounts = UserAccount::where('user_id', auth()->user()->id)->get();
        return view('livewire.user.debit-amount', compact('accounts', 'recipient'));
    }
    public function debitamount(){
        $this->validate([
            'account_selected' =>'required',
            'account_amount'=>'required|numeric|min:1'
        ]);

        dd("nfjnfr");
    }
}
