<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\TranStatus;
use App\Models\TranType;
// use App\Models\Discount;

class TransactionController extends Controller
{
    public function transaction(){
        return view('transaction/transaction');
    }

    public function thank(){
        return view('transaction/thank');
    }
}
