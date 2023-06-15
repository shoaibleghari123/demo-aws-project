<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        echo "constructor";
    }
    public function index()
    {
        echo "index function";
    }

    public function create()
    {
        echo "create function";
    }

    public function show()
    {
        echo "show function";
    }

    public function edit()
    {
        echo "edit function";
    }

    public function update()
    {
        echo "update function";
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
