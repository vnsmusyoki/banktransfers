<?php

namespace App\Http\Livewire\User;

use App\Models\Country;
use App\Models\UserRecipient;
use Brian2694\Toastr\Facades\Toastr;
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

        $new  = new UserRecipient;
        $new->user_id  =auth()->user()->id;
        $new->first_name = $this->first_name;
        $new->last_name = $this->last_name;
        $new->email = $this->email;
        $new->country_code_id = $this->country_name;
        $new->phone_number = $this->phone_number;
        $new->slug  = $totalstring;
        $new->save();

        Toastr::success('You have successfully added a new recipient', 'Success', ["positionClass" => "toast-bottom-right"]);

        return redirect()->route('user.myrecipients');
    }
}
