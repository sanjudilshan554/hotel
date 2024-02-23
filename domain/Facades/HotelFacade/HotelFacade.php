<?php 

namespace domain\Facades\HotelFacade;
use domain\Services\HotelService\HotelService;
use Illuminate\Support\Facades\Facade;

class HotelFacade extends Facade{

    protected static function getFacadeAccessor(){
        return HotelService::class;
    }
}