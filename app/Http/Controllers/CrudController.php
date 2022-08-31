<?php

namespace App\Http\Controllers;
use App\Model\Member;
use App\Model\Province;




use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class CrudController extends Controller
{

    public function update(Request $req,Member $member){

        $inputs = $req->only('First_name','Last_name','Tel','Email','Addess');
        $id = $req->Id;

        $data = $member->find($id);
        $data->update($inputs);

        return redirect('/register/show');

           }

    public function edit($id, Province $province){
        $id = Member::find($id);
        

         return view('formEdit',compact('id'));
          }

    //  public function edit1(Province $province)
    //       {
             
    //           $list= $province->get();
             
    //           return view('formEdit')->with('list',$list );
          
    //       }
    
    
    public function destroy($id){
        
        
        Member::find($id)->delete();
        return redirect()->route('register.show')->with('success','Post delete success');

    }
    
}
