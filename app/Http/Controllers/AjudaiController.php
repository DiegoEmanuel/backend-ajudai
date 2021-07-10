<?php

namespace App\Http\Controllers;

use App\Donor;
use App\Donation;
use Illuminate\Http\Request;

class AjudaiController extends Controller
{
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = new Donor;
        $donor->id = $donor->id;
        $donor->name_donor=$request->name;
        $donor->email_donor=$request->email_donor;
        $donor->phone=$request->phone;
        $donor->password_donor=$request->password_donor;


        $donor->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return Donor::all();
    }


    public function update(Request $request) {

        $data = $request->all();

        Donor::findOrFail($request->id)->update($data);

        return redirect('/google.com.br')->with('msg', 'Evento editado com sucesso!');


    }
    public function show() {

        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
