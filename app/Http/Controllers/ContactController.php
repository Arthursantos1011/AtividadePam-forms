<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('forms');
    }

    public function submitForm(Request $request)
    {
        $data = $request->all();
        return view('forms')->with('data', $data);
    }
}
