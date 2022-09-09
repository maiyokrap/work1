<?php

namespace App\Http\Controllers;

use App\Model\Amphures;
use App\Model\Member;
use App\Model\Province;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index(Province $province)
    {

        $list = $province->get();

        return view('/register')->with('list', $list);

    }

    public function store(Request $req, Member $member, Province $province, Amphures $amphures)
    {

        $inputs = $req->all();

        $member->create($inputs);

        return redirect('/register/show');

    }
    public function show(Member $member, Province $province)
    {
        $member = $member->leftJoin('provinces', 'provinces.id_province', '=', 'member.id_province')
            ->select(
                'member.*',
                'provinces.name_th as province_name'
            );
        $member = $member->leftJoin('amphures', 'amphures.id_amphures', '=', 'member.id_amphures')
            ->select(
                'member.*',
                'amphures.name_th'
            );

        $inputs = request()->input();

        if (isset($inputs['name'])) {

            $member = $member->where('member.First_name', 'LIKE', '%' . trim($inputs['name']) . '%');
            $member = $member->orWhere('member.Last_name', 'LIKE', '%' . trim($inputs['name']) . '%');
            $member = $member->orWhere('member.Tel', 'LIKE', '%' . trim($inputs['name']) . '%');
            $member = $member->orWhere('member.Email', 'LIKE', '%' . trim($inputs['name']) . '%');
            $member = $member->orWhere('provinces.name_th', 'LIKE', '%' . trim($inputs['name']) . '%');
            $member = $member->orWhere('amphures.name_th', 'LIKE', '%' . trim($inputs['name']) . '%');

        }

        $this->data['data'] = $member->get();

        return view('show', $this->data);

    }

}
