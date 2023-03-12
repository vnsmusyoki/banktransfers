<?php

namespace App\Http\Livewire\User;

use App\Models\Country;
use Livewire\Component;

class AddRecipient extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $country_name;
    public $phone_number;

    public function render()
    {
        $countries = Country::all();

        return view('livewire.user.add-recipient', compact('countries'));
    }

    public function addaccount()
    {
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'country_name' => 'required',
            'phone_number' => 'required|digits:10'
        ]);
    }
}
