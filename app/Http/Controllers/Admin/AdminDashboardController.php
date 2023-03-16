<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountTransaction;
use App\Models\Blog;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.dashboard', compact('totalcredit', 'lastcredittransaction', 'totaldebit', 'result', 'piedata', 'transactions'));
    }
    public function alltransactions()
    {
        $transactions = AccountTransaction::whereNull('status')->get();
        return view('admin.all-transactions', compact('transactions'));
    }
    public function allcustomers()
    {
        $customers = User::whereRoleIs('user')->get();
        return view('admin.all-customers', compact('customers'));
    }
    public function allacccounts()
    {
        $customers = User::whereRoleIs('user')->get();
        return view('admin.all-accounts', compact('customers'));
    }
    public function allblogs()
    {
        $blogs = Blog::where('category', 'blog')->get();
        return view('admin.all-blogs', compact('blogs'));
    }
    public function allposts()
    {
        $blogs = Blog::where('category', 'post')->get();
        return view('admin.all-posts', compact('blogs'));
    }
    public function createblog()
    {
        return view('admin.create-blog');
    }
    public function storeblog(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'picture' => 'required|image|mimes:img, jpeg,jpg,webp,png|max:2048',
            'category' => 'required',
            'description' => 'required',
        ]);

        $timenow = time();
        $checknum = "1234567898746351937463790";
        $checkstring = "QWERTYUIOPLKJHGFDSAZXCVBNMmanskqpwolesurte";
        $checktimelength = 4;
        $checksnumlength = 2;
        $checkstringlength = 4;
        $randnum = substr(str_shuffle($timenow), 0, $checktimelength);
        $randstring = substr(str_shuffle($checknum), 0, $checksnumlength);
        $randcheckstring = substr(str_shuffle($checkstring), 0, $checkstringlength);
        $totalstring = str_shuffle($randcheckstring . "" . $randnum . "" . $randstring);

        $new = new Blog;
        $new->title = $request->title;
        $new->description = $request->description;
        $new->category = $request->category;
        $new->slug = $totalstring;
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('pictures', $filenameToStore, 'public');
        $new->image = $filenameToStore;
        $new->save();

        Toastr::success('New post created successfuly', 'Success', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.blogs');
    }
    public function editblog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if ($blog) {
            return view('admin.edit-blog', compact('blog'));
        } else {
            Toastr::error('Post Not Found', 'Error', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('admin.blogs');
        }
    }
    public function deleteblog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        if ($blog) {
            Storage::delete('public/pictures/' . $blog->image);
            $blog->delete();
            Toastr::success('Post deleted Found', 'success', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('admin.blogs');
        } else {
            Toastr::error('Post Not Found', 'Error', ["positionClass" => "toast-bottom-right"]);
            return redirect()->route('admin.blogs');
        }
    }

    public function updateblog(Request $request, $slug)
    {
        $this->validate($request, [
            'title' => 'required',
            'picture' => 'nullable|image|mimes:img, jpeg,jpg,png, webp|max:2048',
            'category' => 'required',
            'description' => 'required',
        ]);


        $new = Blog::where('slug', $slug)->first();
        $new->title = $request->title;
        $new->description = $request->description;
        $new->category = $request->category;
        if ($request->hasFile('picture')) {
            Storage::delete('public/pictures/' . $new->image);
            $fileNameWithExt = $request->picture->getClientOriginalName();
            $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $Extension = $request->picture->getClientOriginalExtension();
            $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
            $path = $request->picture->storeAs('pictures', $filenameToStore, 'public');
            $new->image = $filenameToStore;
        }
        $new->save();

        Toastr::success('Post edited successfully', 'Success', ["positionClass" => "toast-bottom-right"]);
        return redirect()->route('admin.blogs');
    }
}
