<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        echo "index function";
    }

    public function create()
    {
        echo "create function";
    }

    public function store()
    {
        echo "store function";
    }

    public function destroy()
    {
        echo "destroy function";
    }
}
