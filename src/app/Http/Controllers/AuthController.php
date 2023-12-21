<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class AuthController extends Controller
{
    public function index() {
        return view('index');
    }
}
