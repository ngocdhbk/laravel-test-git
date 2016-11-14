<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

#Ten cua lop phai trung ten voi ten file (Welcome)???
class Welcome extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function testAction() {
        echo "Day la mot Action trong controller Welcome";
    }

    #Su dung alias
    public function testAction2() {
        echo "Day la Action 2 trong controller Welcome. Redirect to route alias";
        return redirect()->route("qt");
    }
}