<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GendersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    public function getIndex()
    {

        return view('Genders.Genders');
    }

    public function anyData()
    {
        return Gender::all();

    }

    public function create()
    {
        return view('Genders.create');
    }

    public function store(Request $request)
    {
        $gender = new Genders([
            'gender_name' => $request->get('gender_name'),
        ]);
        $gender->save();
    }


    public function show($id)
    {
        //
    }

    public function edit()
    {

        return view('Genders.edit');
    }

    public function update(Request $request)
    {
        Gender::whereId($request->id)->update([
            'gender_name' => $request->get('gender_name')
        ]);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        Gender::whereId($id)->delete();
    }

    public function destroySelections(Request $request)
    {
        $id = $request->id;
        Gender::whereIn('id', $id)->delete();
    }
}
