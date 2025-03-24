<?php
namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class supplierController extends Controller
{
    public function index()
    {
        $suppliers = DB::table('suppliers')->get();
        return view('suppliers.index', compact('suppliers'));
    }
}
