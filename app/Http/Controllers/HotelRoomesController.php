<?php

namespace App\Http\Controllers;

use domain\Facades\HotelRoomFacade\HotelRoomFacade;
use Illuminate\Http\Request;

class HotelRoomesController extends Controller
{
    public function store(Request $request){


        $exist_id= $request->input('exist_id');
        
        if(is_numeric($exist_id) && $exist_id > 0){
            if  ($request->hasfile('image')) {
            
                $profile_image = $request->File('image');
       
                if ($profile_image->isValid()) {
                    $name_generation = hexdec(uniqid()); 
                    $image_extention = strtolower($profile_image->getClientOriginalExtension());
                        
                    if ($image_extention == 'png' || $image_extention == 'jpeg' || $image_extention == 'jpg') {
                        $image_name = $name_generation . '.' . $image_extention;
                        $upload_location = 'image/hotel_images/';
                        $url = $upload_location . $image_name;
                        $profile_image->move(public_path($upload_location), $image_name);
                 
                        
                        return HotelRoomFacade::update($exist_id,$request,$url);
                        
                    }
                }
            }
       
        }else{

            if  ($request->hasfile('image')) {
            
                $profile_image = $request->File('image');
       
                if ($profile_image->isValid()) {
                    $name_generation = hexdec(uniqid()); 
                    $image_extention = strtolower($profile_image->getClientOriginalExtension());
                        
                    if ($image_extention == 'png' || $image_extention == 'jpeg' || $image_extention == 'jpg') {
                        $image_name = $name_generation . '.' . $image_extention;
                        $upload_location = 'image/hotel_images/';
                        $url = $upload_location . $image_name;
                        $profile_image->move(public_path($upload_location), $image_name);
                 
                        return HotelRoomFacade::store( $request,$url);
    
                        
                    }
                }
            }
        }
    }

    public function get($hotelId){
        $response['hotel_rooms']=HotelRoomFacade::get($hotelId);
        return $response;
    }
}
