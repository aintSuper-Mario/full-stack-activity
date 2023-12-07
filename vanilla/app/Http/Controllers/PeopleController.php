<?php

namespace App\Http\Controllers;

use App\Models\PeopleModel;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        return response()->json(PeopleModel::all()->toArray());
    }
    public function store(Request $request)
    {
        PeopleModel::create($request->all());
    }
    public function destroy($id)
    {
        PeopleModel::find($id)->delete();
    }
}
