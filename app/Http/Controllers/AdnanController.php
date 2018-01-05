<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdnanController extends Controller {
    public function test(Request $request) {
        $name = 'Adnan';
        $name = 'Adnan';
        $name = 'Adnan';
        $name = 'Adnan';
        $name = 'Adnan';
        $name = 'Adnan';
        $name = 'Adnan';
        $name = 'Adnan';

        return view('adnan', compact('name'));
    }
}
