<?php

namespace App\Http\Controllers;

use App\Models\Donate;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsApiController extends Controller
{

    public function index()
    {
        return Donate::all();
    }

    public function store()
    {
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        return Donate::create([
            'name' => request('name'),
            'content' => request('content'),
        ]);
    }
    // public function show ($donate){
    //     return ($donate);
    // }


    public function update(Donate $donate)
    {
        request()->validate([
            'name' => 'required',
            'content' => 'required',
        ]);

        $success = $donate->update([
            'name' => request('name'),
            'content' => request('content'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Donate $donate)
    {
        $success = $donate->delete();

        return [
            'success' => $success
        ];
    }

}
