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

    public function fetch(Request $reques ){
        $id=$request->get('select'); 
        $result=array();
        $query=Province::table('provinces')
        
      
        ->join('amphures','provinces.id_province','=','amphures.province_id' )
        ->select('amphures.name_th')
        ->where('provinces.id_province',$id)
        ->groupBy('amphures.name_th')
        ->get();
        dd($result);

        $output ='<option value="">เลือกอำเภอของท่าน</option>';
        foreach($variable as $row => $value){
            $output.='<option value="'.$row->name_th.'">'.$row->name_th.'</option>';

        }
        echo $output;
       
       


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
