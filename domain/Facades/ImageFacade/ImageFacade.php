<?php


namespace domain\Facades\ImageFacade;

use domain\Services\ImageService\ImageService;
use Illuminate\Support\Facades\Facade;

class ImageFacade extends Facade {

    protected static function getFacadeAccessor(){
        return ImageService::class;
    }

}