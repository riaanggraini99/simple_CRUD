<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
{
    public function index(Request $request)

    {

        $animals= Animal::latest()->paginate(10);

        return view('animals.index',compact('animals'))

            ->with('i', ($request->input('page', 1) - 1) * 10);

    }

    public function create()

    {

        return view('animals.create');

    }

    public function store(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',

            'sound' => 'required',

        ]);

        Animal::create($request->all());

        return redirect()->route('animals.index')

                        ->with('success','Animal added');

    }

    public function show($id)

    {

        $animal= Animal::find($id);

        return view('animals.show',compact('animal'));

    }

    public function edit($id)

    {

        $animal= Animal::find($id);

        return view('animals.edit',compact('animal'));

    }

    public function update(Request $request, $id)

    {

        $this->validate($request, [

            'name' => 'required',

            'sound' => 'required',

        ]);

        Animal::find($id)->update($request->all());

        return redirect()->route('animals.index')

                        ->with('success','animal updated');

    }

    public function destroy($id)

    {

        Animal::find($id)->delete();

        return redirect()->route('animals.index')

                        ->with('success','animal deleted ');
}
}