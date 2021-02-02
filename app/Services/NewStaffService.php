<?php

namespace App\Services;


use App\Http\Requests\StaffPostRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;



class NewStaffService

{

    public function fetchAll()
    {
        // first by priority..then when it was created
        return User::orderBy('id', 'ASC')->orderBy('updated_at', 'DESC')->get();
    }

    public function fetch($id)
    {
        return User::findOrFail($id);
    }

    public function store(StaffPostRequest $request)
    {

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        $user->save();
       // return redirect()->route('users.index')->with('success','User created successfully , They will be notified ');
    
    }

}

?>