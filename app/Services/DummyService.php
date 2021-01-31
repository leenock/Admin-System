<?php

namespace App\Services;

use App\Http\Requests\DummyPostRequest;
use App\Models\Dummy;
use Illuminate\Support\Facades\Auth;

class DummyService
{

    public function fetchAll()
    {
        // first by priority..then when it was created
        return Dummy::orderBy('id', 'ASC')->orderBy('updated_at', 'DESC')->get();
    }

    public function fetch($id)
    {
        return Dummy::findOrFail($id);
    }

    public function store(DummyPostRequest $request)
    {

        $dummy = new Dummy;
        $dummy->name = $request->get('name');
        $dummy->detail = $request->get('detail');
        $dummy->save();

    }

    public function update(DummyUpdateRequest $request)
    {

        $dummy = new Dummy;

        $dummy->name = $request->get('name');
        $dummy->detail = $request->get('detail');
        $dummy->save();

    }


}
?>