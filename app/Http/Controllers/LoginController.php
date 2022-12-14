<?php

namespace App\Http\Controllers;

use App\Model\Member;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postLogin(Request $request, Member $member)
    {

        $username = $request->First_name;
        $password = $request->password;

        $dataRegister = $member->where('First_name', $username)->first();

        if (empty($dataRegister)) {
            return redirect()->back()->with('error', 'ไม่สามารถเข้าสู่ระบบได้ เนื่องจากข้อมูลผิดพลาด');

        }
        // dd($password, $dataRegister->Password);
        if ($password != $dataRegister->Password) {
            return redirect()->back()->withInput()->with('error', 'ไม่สามารถเข้าสู่ระบบได้ เนื่องจากรหัสผ่านไม่ถูกต้อง');
        }

        return redirect()->route('register.show')->with('success', 'ยินดีต้อนรับ');

    }

}
