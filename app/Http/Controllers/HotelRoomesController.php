<?php

namespace App\Http\Controllers;

use domain\Facades\HotelRoomFacade\HotelRoomFacade;
use Illuminate\Http\Request;

class HotelRoomesController extends Controller
{
    public function store(Request $request){
        return HotelRoomFacade::store( $request);
    }
}
