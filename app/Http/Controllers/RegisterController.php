<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Register;



class RegisterController extends Controller
{
    public function store(Request $req,Register $register){
         
        $inputs = $req->all();
       

        $register->create($inputs);

        return redirect('/register/show');

    }
    public function show( Register $register){
        $inputs = request()->input();

       

       
        if (isset($inputs['name'])) {
            $register = $register->where('First_name','LIKE','%' . trim($inputs['name']) . '%');
        }
        if (isset($inputs['lastname'])) {
            $register = $register->where('Last_name','LIKE','%' . trim($inputs['lastname']) . '%');
        }
        if (isset($inputs['tel'])) {
            $register = $register->where('Tel','LIKE','%' . trim($inputs['tel']) . '%');
        }
        if (isset($inputs['email'])) {
            $register = $register->where('Email','LIKE','%' . trim($inputs['email']) . '%');
        }
      
      
      
        
        $this->data['data'] = $register->get();
        
        
       
        return view('show',$this->data);

    
    }

 
}
