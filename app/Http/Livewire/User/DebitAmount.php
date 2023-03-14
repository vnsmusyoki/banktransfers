<?php

namespace App\Http\Livewire\User;

use App\Models\AccountTransaction;
use App\Models\UserAccount;
use App\Models\UserRecipient;
use Brian2694\Toastr\Facades\Toastr;
use Livewire\Component;

class DebitAmount extends Component
{
    public $account_selected;
    public $selected_amount;
    public $selectedrecipient;
    public $transaction_description;
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
            'selected_amount'=>'required|numeric|min:1',
            'transaction_description'=>'required'
        ]);

        $account = UserAccount::where('user_id', auth()->user()->id)->where('id', $this->account_selected)->first();
        if($account->current_balance > $this->selected_amount){
            $recipient = UserRecipient::where('user_id', auth()->user()->id)->where('slug', $this->selectedrecipient)->first();
            $timenow = time();
            $checknum = "1234567898746351937463790";
            $checkstring = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte";
            $checktimelength = 2;
            $checksnumlength = 2;
            $checkstringlength = 6;
            $randnum = substr(str_shuffle($timenow), 0, $checktimelength);
            $randstring = substr(str_shuffle($checknum), 0, $checksnumlength);
            $randcheckstring = substr(str_shuffle($checkstring), 0, $checkstringlength);
            $totalstring = str_shuffle($randcheckstring . "" . $randnum . "" . $randstring);

            $new = new AccountTransaction();
            $new->user_id = auth()->user()->id;
            $new->account_id = $this->account_selected;
            $new->amount = $this->selected_amount;
            $new->transaction_category="debit";
            $new->description = $this->transaction_description;
            $new->recipient_id = $recipient->id;
            $new->status = "pending";
            $new->slug = $totalstring;
            $new->save();

            Toastr::warning('Transaction has been initialised', 'Warning', ["positionClass" => "toast-bottom-right"]);

            return redirect()->route('user.completetransaction', $totalstring);
        }else{
            session()->flash('message', 'The selected amount is higher than the amount you have in your selected account');

        }
    }
}
