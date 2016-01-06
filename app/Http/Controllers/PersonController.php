<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the people.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::paginate();

        return view('admin.resources.person.index', compact('people'));
    }

    /**
     * Show the form for creating a new person.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resources.person.create');
    }

    /**
     * Store a newly created person in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'address' => 'required|string',
            'age' => 'required|integer',
            'active' => 'required|boolean',
        ]);
        $person = Person::create($request->all());

        return redirect()->route('admin.person.show', $person);
    }

    /**
     * Display the specified person.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::findOrFail($id);

        return view('admin.resources.person.show', compact('person'));
    }

    /**
     * Show the form for editing the specified person.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Person::findOrFail($id);

        return view('admin.resources.person.edit', compact('person'));
    }

    /**
     * Update the specified person in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'address' => 'required|string',
            'age' => 'required|integer',
            'active' => 'required|boolean',
        ]);
        $person = Person::findOrFail($id);
        $person->update($request->all());

        return redirect()->route('admin.person.show', $person);
    }

    /**
     * Remove the specified person from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return redirect()->route('admin.person.index');
    }
}