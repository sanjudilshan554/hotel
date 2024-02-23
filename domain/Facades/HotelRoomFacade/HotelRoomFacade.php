<?php 

namespace domain\Facades\HotelRoomFacade;
use domain\Services\HotelRoomService\HotelRoomService;
use Illuminate\Support\Facades\Facade;

class HotelRoomFacade extends Facade{
    
    protected static function getFacadeAccessor(){
        return HotelRoomService::class;
    }

}