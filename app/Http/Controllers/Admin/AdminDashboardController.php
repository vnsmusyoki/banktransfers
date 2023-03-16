<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountTransaction;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalcredit = AccountTransaction::where('transaction_category', "credit")->sum('amount');
        $totaldebit = AccountTransaction::where('transaction_category', "debit")->sum('amount');
        $lastcredittransaction = AccountTransaction::where('transaction_category', "credit")->latest()->first();
        $piedata = AccountTransaction::select(DB::raw("SUM(amount) as total_amount"), 'transaction_category')
            ->groupBy('transaction_category')
            ->get();
        $result[] = ['Category', 'Total Amount'];
        foreach ($piedata as $key => $value) {
            $result[++$key] = [$value->transaction_category, (int)$value->total_amount];
        }
        $transactions = AccountTransaction::latest()->take(10)->get();
        return view('admin.dashboard', compact('totalcredit', 'lastcredittransaction', 'totaldebit','result', 'piedata','transactions'));
    }
    public function alltransactions()
    {
        $transactions = AccountTransaction::whereNull('status')->get();
        return view('admin.all-transactions', compact('transactions'));
    }
    public function allcustomers(){
        $customers = User::whereRoleIs('user')->get();
        return view('admin.all-customers',compact('customers'));
    }
    public function allacccounts(){
        $customers = User::whereRoleIs('user')->get();
        return view('admin.all-accounts',compact('customers'));
    }
    public function allblogs(){
        $blogs = Blog::where('category', 'blog')->get();
        return view('admin.all-blogs', compact('blogs'));
    }
}
