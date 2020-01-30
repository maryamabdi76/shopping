<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factor;
use App\Models\Transaction;
use App\Models\FactorKala;



class FactorController extends Controller
{
    public function factor(){
        return view('factor/factor');
    }
}
