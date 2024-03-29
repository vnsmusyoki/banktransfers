<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AccountTransaction;
use App\Models\AccountType;
use App\Models\Blog;
use App\Models\RecipientTransaction;
use App\Models\UserAccount;
use App\Models\UserRecipient;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Faker\Provider\UserAgent;
use Illuminate\Support\Facades\DB;

class UserDashboardController extends Controller
{
    public function index()
    {
        $balance = UserAccount::where('user_id', auth()->user()->id)->sum('current_balance');
        $latestreceived = AccountTransaction::where('user_id', auth()->user()->id)->where('transaction_category', 'credit')->latest()->first();
        $totaldebits = AccountTransaction::where('user_id', auth()->user()->id)->where('transaction_category', 'debit')->sum('amount');
        $latesttransactions = AccountTransaction::where('user_id', auth()->user()->id)->latest()->take(5)->get();
        $piedata = AccountTransaction::select(DB::raw("SUM(amount) as total_amount"), 'transaction_category')
        ->where('user_id', auth()->user()->id)
        ->groupBy('transaction_category')
        ->get();
    $result[] = ['Category', 'Total Amount'];
    foreach ($piedata as $key => $value) {
        $result[++$key] = [$value->transaction_category, (int)$value->total_amount];
        // $result[++$key] = ["Subject ", (int)$value->subject_name_id];
    }
        return view('user.dashboard', compact('balance','latestreceived','totaldebits','latesttransactions','result', 'piedata'));
    }
    public function paytransaction()
    {
        $recipients = UserRecipient::where('user_id', auth()->user()->id)->get();
        return view('user.make-transaction', compact('recipients'));
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

        if ($account) {

            $transactions = AccountTransaction::where('account_id', $account->id)->get();
            return view('user.selected-account-transactions', compact('account', 'transactions'));
        } else {
            Toastr::warning('Account details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myaccounts');
        }
    }
    public function myrecipients()
    {
        $recipients = UserRecipient::where('user_id', auth()->user()->id)->get();
        return view('user.my-recipients', compact('recipients'));
    }
    public function myrecipientstransactions($recipientslug)
    {
        $recipient = UserRecipient::where('user_id', auth()->user()->id)->where('slug', $recipientslug)->first();
        $transactions = AccountTransaction::where('recipient_id', $recipient->id)->get();
        if ($recipient) {
            return view('user.my-recipient-transactions', compact('recipient', 'transactions'));
        } else {
            Toastr::warning('Recipient details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myrecipients');
        }
    }
    public function allposts()
    {
        $blogs = Blog::all();
        return view('user.all-posts', compact('blogs'));
    }
    public function alltransactionaccounts()
    {
        $transactions = AccountTransaction::where('user_id', auth()->user()->id)->whereNull('status')->orderBy('created_at', 'asc')->get();
        return view('user.all-transaction-accounts', compact('transactions'));
    }
    public function selectrecipientaccount($selectedaccount)
    {
        $recipient = UserRecipient::where('user_id', auth()->user()->id)->where('slug', $selectedaccount)->first();
        $transactions = AccountTransaction::where('recipient_id', $recipient->id)->get();
        if ($recipient) {
            $accounts = UserAccount::where('user_id', auth()->user()->id)->get();

            return view('user.my-recipient-transactions-amount', compact('recipient', 'accounts'));
        } else {
            Toastr::warning('Recipient details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.myrecipients');
        }
    }
    public function completetransaction($transslug)
    {
        $transaction = AccountTransaction::where('user_id', auth()->user()->id)->where('slug', $transslug)->first();

        if ($transaction) {

            return view('user.complete-transaction', compact('transaction'));
        } else {
            Toastr::warning('Transaction details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.dashboard');
        }
    }



    public function updatecompletetransaction(Request $request)
    {
        $this->validate($request, [
            'id_number' => 'required|digits:8',
            'transaction_id' => 'required',
        ]);

        $transaction = AccountTransaction::where('user_id', auth()->user()->id)->where('slug', $request->transaction_id)->first();

        if ($transaction) {
            if (auth()->user()->id_number == $request->id_number) {
                $balance = UserAccount::where('user_id', auth()->user()->id)->where('id', $transaction->account_id)->first();
                $balance->current_balance =$balance->current_balance - $transaction->amount;
                $balance->save();


                $transaction->new_balance = $balance->current_balance;
                $transaction->status = null;
                $transaction->save();

                Toastr::success('Transaction debited successfully from your account', 'Success', ["positionClass" => "toast-bottom-right"]);
                return redirect()->route('user.alltransactionaccounts');
            } else {
                Toastr::warning('ID Number failed to match', 'Warning', ["positionClass" => "toast-bottom-right"]);
                return redirect()->route('user.alltransactionaccounts');
            }
            return view('user.complete-transaction', compact('transaction'));
        } else {
            Toastr::warning('Transaction details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.dashboard');
        }
    }
    public function pendingtransactions(){
        $transactions = AccountTransaction::where('user_id', auth()->user()->id)->where('status', 'pending')->get();
        return view('user.all-pending-transaction', compact('transactions'));
    }
    public function deletependingtransactions($transslug)
    {
        $transaction = AccountTransaction::where('user_id', auth()->user()->id)->where('slug', $transslug)->first();
        if ($transaction) {
            $transaction->delete();
            Toastr::warning('Transaction deleted successfully', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.pendingtransactions');
        } else {
            Toastr::warning('Transaction details not found', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('user.pendingtransactions');
        }
    }
}
