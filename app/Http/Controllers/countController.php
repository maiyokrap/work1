<?php

namespace App\Http\Controllers;

use App\Model\Amphures;
use App\Model\Member;
use App\Model\Province;
use Illuminate\Http\Request;

class countController extends Controller
{
    public function count(){
    $number =50;
//         for ($i=1; $i<=100; $i++)
//         {
//             $number = $i;
//         }
    
// dd($number);
        
        return view('/count', compact('number'));
    }
}