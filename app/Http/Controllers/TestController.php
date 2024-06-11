<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request) {
        $cc = Test::create([
            'name' => 'Testrae',
            'number' => 2
        ]);

        $test = Test::get();
        return $test;
    }
}
