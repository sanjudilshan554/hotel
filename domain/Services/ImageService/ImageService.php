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

    public function update($file,$image_id){

       $find_image = $this->images->where('id',$image_id)->first();

        $name = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $name);

        return  $find_image->update([
            
            'name'=> $name,
            
        ]);
    }

}