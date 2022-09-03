<?php

namespace App\Http\Controllers;

use App\Model\Amphures;
use App\Model\Province;
use DB;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{

    public function createprovince(Request $req, Province $province)
    {

        $data = $req->only('name_th', 'name_en', 'code');
        $province->create($data);
        $this->data['data'] = $province->get();

        return view('province', $this->data);

    }
    public function showprovince()
    {
        $this->data['data'] = Province::orderBy('id_province')->get();
        return view('province', $this->data);
    }

    public function destroy($id)
    {
        Province::find($id)->delete();
        return redirect()->route('province.show')->with('success', 'Post delete success');

    }
    public function edit($id, Province $province)
    {
        $id = Province::find($id);

        return view('provinceEdit', compact('id'));
    }

    public function update(Request $req, Province $province)
    {

        $inputs = $req->only('name_th', 'name_th', 'code');
        $id = $req->id_province;

        $data = $province->find($id);
        $data->update($inputs);

        return redirect('/province/show');

    }

    public function amphures(Request $req)
    {
        $id = $req->get('id');

        $result = array();
        $query = DB::table('provinces')
            ->join('amphures', 'provinces.id_province', '=', 'amphures.id_province')
            ->select('amphures.name_th')
            ->where('provinces.id_province', $id)
            ->groupBy('amphures.name_th')
            ->get();
        $data = '<option value="">เลือกอำเภอ</option>';
        foreach ($query as $row) {
            $data .= '<option value="' . $row->name_th . ' ">' . $row->name_th . '</option>';
        }

        echo $data;

    }

    // $id = $req->$_GET('id_province');
    // $query = Province::join('amphures','provinces.id_province','=','amphures.provinces_id')
    // ->select('amphures.name_th','amphures.id_amphures')
    // ->where('provinces.id_province',$id)
    // ->get();
    // $output='<option value="">เลือกอำเภอ</option>';
    // foreach ($query as $row){
    //     $output.='<option value="'.$row->id.'"></option>';
    // }
    // return $output;

    // echo $_GET['function'];
    // exit();
    // $select = $req->get('select');
    // $value = $req->get('value');
    // $amphures = $req->get('amphures');
    // $data =Province::table('id_amphures')
    //     ->where($select, $value, $amphures)
    //     ->group($amphures)
    //     ->get();
    //     $output = '<option value="">select'.ucfirst($amphures).'</option>';
    //     foreach($data as $row)
    //     {
    //         $output = '<option value="'.$row->$amphures.'">
    //         '.$row->$amphures.' </option>';

    //     }
    //     return $output;

}