<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Member;
use App\Model\Province;
use App\Model\Amphures;

class ProvinceController extends Controller{


    
    public function createprovince( Request $req, Province $province){
        
        $data = $req->only('name_th','name_en','code');
        $province->create($data);
        $this->data['data'] = $province->get();

        return view('province',$this->data);

    }
    public function showprovince( ){ 
        $this->data['data'] = Province::orderBy('id_province')->get();
        return view('province',$this->data);
    }
   

    public function destroy($id){     
        Province::find($id)->delete();
        return redirect()->route('province.show')->with('success','Post delete success');


    }
    public function edit($id, Province $province){
        $id = Province::find($id);
        

         return view('provinceEdit',compact('id'));
          }
        
    public function update(Request $req,Province $province){
       


            $inputs = $req->only('name_th','name_th','code');
            $id = $req->id_province;
    
            $data = $province->find($id);
            $data->update($inputs);
    
            return redirect('/province/show');
    
               }



}