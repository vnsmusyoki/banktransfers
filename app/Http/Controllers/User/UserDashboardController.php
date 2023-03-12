<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccountTransaction;
use App\Models\AccountType;
use App\Models\UserAccount;
use App\Models\UserRecipient;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Faker\Provider\UserAgent;

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
    public function editaccount($slug)
    {
        $account = UserAccount::where(['id' => $slug, 'user_id' => auth()->user()->id])->first();
        if ($account) {
            $acctypes = AccountType::all();
            return view('user.edit-account', compact('account', 'acctypes'));
        } else {
            Toastr::warning('Account details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myaccounts');
        }
    }
    public function updateaccount(Request $request, $accountslug)
    {
        $this->validate($request, [
            'account_name' => 'required|string|min:2|max:100',
            'account_number' => 'required|digits:6',
            'account_type' => 'required'
        ]);

        $account = UserAccount::where(['id' => $accountslug, 'user_id' => auth()->user()->id])->first();
        if ($account) {
            $account->account_type_id = $request->account_type;
            $account->account_no = $request->account_number;
            $account->account_name = $request->account_name;
            $account->save();

            Toastr::warning('Account edited successfully.', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myaccounts');
        } else {
            Toastr::warning('Account details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myaccounts');
        }
    }
    public function topupaccount($slug)
    {
        $account = UserAccount::where(['id' => $slug, 'user_id' => auth()->user()->id])->first();
        if ($account) {
            return view('user.top-up-account', compact('account'));
        } else {
            Toastr::warning('Account details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myaccounts');
        }
    }
    public function accounttransactions($slug)
    {
        $account = UserAccount::where(['id' => $slug, 'user_id' => auth()->user()->id])->first();
        $transactions = AccountTransaction::where('account_id', $account->id)->get();
        if ($account) {
            return view('user.selected-account-transactions', compact('account', 'transactions'));
        } else {
            Toastr::warning('Account details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myaccounts');
        }
    }
    public function myrecipients(){
        $recipients = UserRecipient::where('user_id', auth()->user()->id)->get();
        return view('user.my-recipients', compact('recipients'));
    }

}
