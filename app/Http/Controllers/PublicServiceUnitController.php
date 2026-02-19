<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicServiceUnitController extends Controller
{
    public function index()
    {
        return view('unit-pelayanan-publik.index');
    }
}
