<?php

namespace domain\Facades\RoomTypeFacade;
use domain\Services\RoomTypeService\RoomTypeService;
use Illuminate\Support\Facades\Facade;

class RoomTypeFacade extends Facade{

    public static function getFacadeAccessor(){
        return RoomTypeService::class;
    }
}
