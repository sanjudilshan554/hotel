<?php

namespace domain\Services\ImageService;
use App\Models\Image;

class ImageService {

    protected $images;

    public function __construct(){
        $this->images = new Image();
    }

    public function store($file){

       
        $name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $name);

        return $this->images->create([
            'name'=> $name,
        ]);
    }

}