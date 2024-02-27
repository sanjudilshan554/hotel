<?php

namespace App\Http\Controllers;

use domain\Facades\HotelRoomFacade\HotelRoomFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class HotelRoomesController extends Controller
{
    public function store(Request $request){


        $exist_id= $request->input('exist_id');
        
        // hotel room update
        if(is_numeric($exist_id) && $exist_id > 0){
              
            return HotelRoomFacade::update($exist_id,$request);

        } 
        // hotel room create
        else{

            return HotelRoomFacade::store($request);
        }
           
    }

    public function get($hotelId){

        $accessPath = Config::get('images.access_path');

        $response = [
            'access_path' => $accessPath,
            'hotel_rooms' => HotelRoomFacade::get($hotelId),
        ];

        return $response;

    }

    public function count(){
        return HotelRoomFacade::count();
    }

    public function delete($id){
        return HotelRoomFacade::delete($id);
    }
}
