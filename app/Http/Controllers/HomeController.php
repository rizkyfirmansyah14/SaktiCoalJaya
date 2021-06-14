<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $count_contact = DB::table('contacts')->count();
        $count_business = DB::table('business_scopes')->count();
        $count_user = DB::table('users')->count();
        $contact = DB::table('contacts')->orderBy('created_at','desc')->paginate(10);
        return view('admin.index', ['count_contact' => $count_contact,'count_user' => $count_user, 'count_business' => $count_business, 'contact' => $contact]);
    }
}
