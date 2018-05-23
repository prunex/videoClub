<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class apiUserController extends Controller {

    //

    public function index() {
        return response()->json(User::all());
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return response()->json($user);
    }

    public function store(Request $request) {
        //dd($request);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json($user);
    }

    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        if (isset($request->name)) {
            $user->name = $request->name;
        }
        if (isset($request->email)) {
            $user->email = $request->email;
        }
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->save();
        return response()->json($user);
    }

    public function destroy($id) {
        User::destroy($id);
        return response()->json("DELETE OK");
    }

}
