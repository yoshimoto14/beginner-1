<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    public function create(Request $request) {
        $form = $request->all();
        Person::create($form);
        return redirect('/login');
    }

    public function login(Request $request) {
        $persons = Person::find($request->id);
        return view('index', compact('persons'));
    }
}
