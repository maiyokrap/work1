<?php

namespace App\Http\Controllers;
use App\Model\Register;




use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class CrudController extends Controller
{

    public function update(Request $req,Register $register){

        $inputs = $req->only('First_name','Last_name','Tel','Email','Addess');
        $id = $req->Id;

        $data = $register->find($id);
        $data->update($inputs);

        return redirect('/register/show');

        

    }

    public function edit($id){
        $id = Register::find($id);
        



        return view('formEdit',compact('id'));

      



    }
    
    
    public function destroy($id){
        
        
        Register::find($id)->delete();
        return redirect()->route('register.show')->with('success','Post delete success');

    }
    
}
