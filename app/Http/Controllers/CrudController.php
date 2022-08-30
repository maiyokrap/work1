<?php

namespace App\Http\Controllers;
use App\Model\Register;




use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class CrudController extends Controller
{

    public function create(){
        return view('register.show');

    }

    public function edit($id){
        $id = Register::find($id);



        return view('register.show',compact('id'));

      



    }
    
    
    public function destroy($id){
        
        Register::find($id)->delete();
        return redirect()->route('register.show')->with('success','Post delete success');

    }
    
}
