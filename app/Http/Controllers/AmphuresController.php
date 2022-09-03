<?php

namespace App\Http\Controllers;

use App\Model\Amphures;
use App\Model\Member;
use App\Model\Province;
use Illuminate\Http\Request;

class AmphuresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req, Member $member, Amphures $amphures)
    {
        $inputs = $req->all();

        $amphures->create($inputs);

        return redirect('/amphures/show');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Amphures $amphures)
    {
        $this->data['data'] = Amphures::orderBy('id_amphures')->get();

        return view('amphures', $this->data);

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Amphures $amphures, Province $province)
    {

        $id = Amphures::find($id);
        $list = $province->get();

        return view('amphuresEdit', compact('id', 'list'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAmphures(Request $req, Member $member, Amphures $amphures)
    {

        $inputs = $req->only('name_th', 'name_en', 'code');

        $id = $req->id_amphures;

        $data = $amphures->find($id);
        $data->update($inputs);

        return redirect('/amphures/show');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyAmphures($id)
    {

        Amphures::find($id)->delete();
        return redirect()->route('amphures.show')->with('success', 'Post delete success');
        //
    }
}