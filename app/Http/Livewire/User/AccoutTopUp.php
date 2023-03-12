<?php

namespace App\Http\Livewire\User;

use App\Models\UserAccount;
use Livewire\Component;

class AccoutTopUp extends Component
{
    public $totalsteps = 3;
    public $currentstep = 1;
    public  $selectedaccount;
    public $account_checked;
    public $top_up_amount;
    public $transaction_description;

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
        $account = UserAccount::find($this->selectedaccount);
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
                'amount' => 'required|numeric|min:1',
                'transaction_description' => 'required'
            ]);
        }
    }
    public function topaccount()
    {
        $this->resetErrorBag();
        if ($this->currentstep ==  3) {
            $this->validate([

                'terms_conditions' => 'required'
            ]);
        }
        $fileNameWithExt = $this->passport_image->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->passport_image->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->passport_image->storeAs('passport_images', $filenameToStore, 'public');

        // $user = new User;
        // $user->name = $this->full_name;
        // $user->email = $this->email;
        // $user->password = bcrypt($this->password);
        // $user->physical_address = $this->physical_address;
        // $user->phone_number = $this->phone_number;
        // $user->id_number = $this->id_number;
        // $user->country_id = $this->country_name;
        // $user->id_passport_image = $filenameToStore;
        // $user->save();

        return redirect()->route('login')->with('accountsuccess', 'Account created successfully!');;
        $this->validate([
            'account_checked' => 'required',
        ]);
    }
}
