<?php

namespace domain\Facades\HotelImageFacade;
use domain\Services\HotelImageService\HotelImageService;
use Illuminate\Support\Facades\Facade;

class HotelImageFacade extends Facade{

    public static function getFacadeAccessor(){
        return HotelImageService::class;
    }
}