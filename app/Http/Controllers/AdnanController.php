<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdnanController extends Controller {
    public function test(Request $request) {
        $name = 'Adnan';
        return view('adnan', compact('name'));
    }
}
