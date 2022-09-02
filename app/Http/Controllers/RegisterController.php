<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Member;
use App\Model\Province;
use App\Model\Amphures;




class RegisterController extends Controller
{

    public function index(Province $province)
    {
       
        $list= $province->get();
       
        return view('/register')->with('list',$list );
    
    }

   
       


    

    public function store(Request $req,Member $member,Province $province){
        
         
        $inputs = $req->all();
       

        $member->create($inputs);

        return redirect('/register/show');

    }
    public function show( Member $member){
        $inputs = request()->input();

       

       
        if (isset($inputs['name'])) {
            $member = $member->where('First_name','LIKE','%' . trim($inputs['name']) . '%');
        }
        if (isset($inputs['lastname'])) {
            $member = $member->where('Last_name','LIKE','%' . trim($inputs['lastname']) . '%');
        }
        if (isset($inputs['tel'])) {
            $member = $member->where('Tel','LIKE','%' . trim($inputs['tel']) . '%');
        }
        if (isset($inputs['email'])) {
            $member = $member->where('Email','LIKE','%' . trim($inputs['email']) . '%');
        }
      
      
      
        
        $this->data['data'] = $member->get();
        
        
       
        return view('show',$this->data);

    
    }

 
}
