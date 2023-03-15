<?php

namespace App\Http\Livewire\User;

use App\Models\AccountTransaction;
use App\Models\UserAccount;
use Brian2694\Toastr\Facades\Toastr;
use Livewire\Component;

class AccoutTopUp extends Component
{
    public $totalsteps = 3;
    public $currentstep = 1;
    public  $selectedaccount;
    public $account_checked;
    public $top_up_amount;
    public $transaction_description;
    public $accept_transaction;

    public function mount($accountslug)
    {
        $this->currentstep = 1;
        $this->selectedaccount = $accountslug;
    }


    public function increasestep()
    {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentstep++;
        if ($this->currentstep > $this->totalsteps) {
            $this->currentstep = $this->totalsteps;
        }
    }
    public function descreaseStep()
    {
        $this->resetErrorBag();
        $this->currentstep = $this->currentstep - 1;
        if ($this->currentstep < 1) {
            $this->currentstep = 1;
        }
    }
    public function render()
    {
        $account = UserAccount::where('id', $this->selectedaccount)->where('user_id', auth()->user()->id)->first();
        return view('livewire.user.accout-top-up', compact('account'));
    }
    public function validateData()
    {
        if ($this->currentstep == 1) {
            $this->validate([
                'account_checked' => 'required',
            ], [
                'account_checked.required' => 'Please select at least one account',
            ]);
        } else if ($this->currentstep == 2) {
            $this->validate([
                'top_up_amount' => 'required|numeric|min:1',
                'transaction_description' => 'required'
            ]);
        }
    }
    public function topaccount()
    {
        $this->resetErrorBag();
        if ($this->currentstep ==  3) {
            $this->validate([
                'accept_transaction' => 'required'
            ], [
                'accept_transaction' => 'Please make sure the checkbox is checked before proceeding'
            ]);
        }
        $timenow = time();
        $checknum = "1234567898746351937463790";
        $checkstring = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte";
        $checktimelength = 2;
        $checksnumlength = 2;
        $checkstringlength = 2;
        $randnum = substr(str_shuffle($timenow), 0, $checktimelength);
        $randstring = substr(str_shuffle($checknum), 0, $checksnumlength);
        $randcheckstring = substr(str_shuffle($checkstring), 0, $checkstringlength);
        $totalstring = str_shuffle($randcheckstring . "" . $randnum . "" . $randstring);
        $account = UserAccount::find($this->account_checked);
        $account->current_balance = $this->top_up_amount + $account->current_balance;
        $account->save();
        $trans = new AccountTransaction;
        $trans->account_id = $this->account_checked;
        $trans->user_id = auth()->user()->id;
        $trans->amount = $this->top_up_amount;
        $trans->new_balance =  $account->current_balance;
        $trans->description = $this->transaction_description;
        $trans->transaction_category = "credit";
        $trans->slug = $totalstring;
        $trans->save();



        Toastr::success('Account top up credited successfully', 'Success', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('user.myaccounts');
    }
}
