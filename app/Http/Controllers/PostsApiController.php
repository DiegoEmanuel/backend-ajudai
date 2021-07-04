<?php

namespace App\Http\Controllers;

use App\Donation;

use Illuminate\Http\Request;

class PostsApiController extends Controller
{

    public function index()
    {
        return Donation::all();
    }

    // public function store()
    // {
    //     request()->validate([
    //         'name' => 'required',
    //         'content' => 'required',
    //     ]);

    //     return Donation::create([
    //         'name' => request('name'),
    //         'content' => request('content'),
    //     ]);
    // }
    // // public function show ($donate){
    // //     return ($donate);
    // // }


    // public function update(Donation $donate)
    // {
    //     request()->validate([
    //         'name' => 'required',
    //         'content' => 'required',
    //     ]);

    //     $success = $donate->update([
    //         'name' => request('name'),
    //         'content' => request('content'),
    //     ]);

    //     return [
    //         'success' => $success
    //     ];
    // }

    // public function destroy(Donation $donate)
    // {
    //     $success = $donate->delete();

    //     return [
    //         'success' => $success
    //     ];
    // }

}
