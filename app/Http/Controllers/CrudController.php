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
        return view('/formEdit' );

      



    }
    
    
    public function destroy($id){
        dd($id);

    }
    
    // {$id->delete();
        
    //     return redirect()->route('register.show')
    //                     ->with( 'Successfully deleted the blog!');
        

       
    }
}
