<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccountType;
use App\Models\UserAccount;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


class UserDashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }
    public function paytransaction()
    {
        return view('user.make-transaction');
    }
    public function myaccounts()
    {
        $accounts = UserAccount::where('user_id', auth()->user()->id)->get();
        return view('user.my-accounts', compact('accounts'));
    }
    public function addaccount()
    {
        $acctypes = AccountType::all();
        return view('user.add-account', compact('acctypes'));
    }
    public function storeaccount(Request $request)
    {
        $this->validate($request, [
            'account_name' => 'required|string|min:2|max:100',
            'account_number' => 'required|digits:6',
            'account_type' => 'required'
        ]);

        $account = new UserAccount;
        $account->user_id  = auth()->user()->id;
        $account->account_type_id = $request->account_type;
        $account->account_no = $request->account_number;
        $account->account_name = $request->account_name;
        $account->opening_balance = 0;
        $account->current_balance = 0;
        $account->save();

        Toastr::success('Account created successfully.', 'Success', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('user.myaccounts');
    }
}
