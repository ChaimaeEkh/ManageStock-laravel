<?php


namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class customerController extends Controller
{
    public function index()
    {
        $customers = DB::table('customers')->get();
        return view('customers.index', compact('customers'));
    }
}
