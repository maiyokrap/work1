<?php

namespace App\Http\Controllers;

use App\Model\Amphures;
use App\Model\Member;
use App\Model\Province;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index(Province $province)
    {

        $list = $province->get();

        return view('/formEdit')->with('list', $list);

    }

    public function update(Request $req, Member $member, Amphures $amphures)
    {

        $inputs = $req->only('First_name', 'Last_name', 'Tel', 'Email', 'Addess', 'id_province', 'id_amphures', 'zipcode');
        $id = $req->Id;
        $data = $member->find($id);
        $data->update($inputs);

        return redirect('/register/show');

    }

    public function edit($id, Province $province, Amphures $amphures)
    {

        $id = Member::find($id);

        $list = $province->get();
        $list1 = Amphures::where("id_province", "=", $id->id_province)->get();

        return view('formEdit', compact('id', 'list', 'list1'));
    }

    public function destroy($id)
    {

        Member::find($id)->delete();
        return redirect()->route('register.show')->with('success', 'Post delete success');

    }

}