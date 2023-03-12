<?php

namespace App\Http\Livewire\User;

use App\Models\Country;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Brian2694\Toastr\Facades\Toastr;


class Register extends Component
{
    use WithFileUploads;
    // use withFi
    public $totalsteps = 3;
    public $currentstep = 1;
    public $full_name;
    public $email;
    public $phone_number;
    public $password;
    public $password_confirmation;
    public $id_number;
    public $passport_image;
    public $physical_address;
    public $country_name;
    public function mount()
    {
        $this->currentstep = 1;
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
        $countries = Country::all();
        return view('livewire.user.register', compact('countries'));
    }
    public function validateData()
    {
        if ($this->currentstep == 1) {
            $this->validate([
                'full_name' => 'required|string|min:3|max:100',
                'email' => 'required|email|unique:users',
                'country_name' => 'required',

            ]);
        } else if ($this->currentstep == 2) {
            $this->validate([
                'phone_number' => 'required|digits:10|unique:users',
                'id_number' => 'required|digits:8|unique:users',
                'passport_image' => 'required|image|mimes:img, jpeg,jpg,png|max:2048',
            ]);
        }
    }
    public function storeaccount()
    {
        $this->resetErrorBag();
        if ($this->currentstep ==  3) {
            $this->validate([
                'physical_address' => 'required|string|min:2|max:50',
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);
        }
        $fileNameWithExt = $this->passport_image->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->passport_image->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->passport_image->storeAs('passport_images', $filenameToStore, 'public');

        $user = new User();
        $user->name = $this->full_name;
        $user->email = $this->email;
        $user->password = bcrypt($this->password);
        $user->physical_address = $this->physical_address;
        $user->phone_number = $this->phone_number;
        $user->id_number = $this->id_number;
        $user->country_id = $this->country_name;
        $user->id_passport_image = $filenameToStore;
        $user->save();

        $user->attachRole('user'); 
        return redirect()->route('login')->with('accountsuccess','Account created successfully!');;
    }
}
