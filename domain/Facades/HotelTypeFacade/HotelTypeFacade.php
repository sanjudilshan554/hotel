<?php

namespace domain\Facades\HotelTypeFacade;
use domain\Services\HotelTypeService\HotelTypeService;
use Illuminate\Support\Facades\Facade;

class HotelTypeFacade extends Facade{

    public static function getFacadeAccessor(){
        return HotelTypeService::class;
    }
}
