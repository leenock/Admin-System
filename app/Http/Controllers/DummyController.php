<?php

namespace App\Http\Controllers;
use App\Models\Dummy;
use Illuminate\Http\Request;

use App\Http\Requests\DummyPostRequest;
use App\Http\Requests\DummyUpdateRequest;
use App\Services\DummyService;

class DummyController extends Controller
{
    
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

function __construct()
{
$this->middleware('permission:dummy-list|dummy-create|dummy-edit|dummy-delete', ['only' => ['index','show']]);
$this->middleware('permission:dummy-create', ['only' => ['create','store']]);
$this->middleware('permission:dummy-edit', ['only' => ['edit','update']]);
$this->middleware('permission:dummy-delete', ['only' => ['destroy']]);
}

/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/

public function index(DummyService $dummy)
{
       $dummies = Dummy::latest()->paginate(100);
       return view('dummys.index',compact('dummies'))->with('i', (request()->input('page', 1) - 1) * 10);

}

/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/

public function create()
{
return view('dummys.create');
}

/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/

public function store(DummyPostRequest $request, DummyService $dummy)
{
        $dummy->store($request);
        return redirect()->route('dummys.index')->with('success','Dummy profile created successfully');
}
/**
* Display the specified resource.
*
* @param  \App\Dummy  $dummy
* @return \Illuminate\Http\Response
*/

public function show(Dummy $dummy)
{

return view('dummys.show',compact('dummy'));
}
/**
* Show the form for editing the specified resource.
*
* @param  \App\Dummy  $dummy
* @return \Illuminate\Http\Response
*/

public function edit(Dummy $dummy)
{
return view('dummys.edit',compact('dummy'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  \App\Dummy  $dummy
* @return \Illuminate\Http\Response
*/
public function update(DummyUpdateRequest $request, Dummy $dummy)
{

        
        $dummy->update($request->all());
        return redirect()->route('dummys.index')->with('success','dummy updated successfully');
}
/**
* Remove the specified resource from storage.
*
* @param  \App\Dummy  $dummy
* @return \Illuminate\Http\Response
*/


public function destroy(Dummy $dummy)
{
    $dummy->delete();
    return redirect()->route('dummys.index')->with('success','dummy deleted successfully');
}

}
