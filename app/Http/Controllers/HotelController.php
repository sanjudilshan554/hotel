<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HotelController extends Controller
{
    public function index(){
        return Inertia::render("Hotel/index");
    }

    public function edit(){
        // need to authenticate with cutsomter id up to now..
        return Inertia::render("Hotel/edit");
    }
}
