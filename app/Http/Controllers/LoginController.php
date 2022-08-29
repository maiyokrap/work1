<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Register;



class LoginController extends Controller
{
    public function postLogin(Request $req,Register $register){
        $inputs = $req->all();
       

        $register->create($inputs);

        return redirect('/register/show');

    }
   
    
    }

 

