<?php

namespace App\Http\Controllers;

use domain\Facades\RoomTypeFacade\RoomTypeFacade;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomTypeController extends Controller
{
    public function index(){
        return Inertia::render("RoomTypes/index");
    }

    public function store(Request $request){
        return RoomTypeFacade::store($request->all());
    }

    public function all(){
        $response['room_types']=RoomTypeFacade::all();
        return $response;
    }
}
