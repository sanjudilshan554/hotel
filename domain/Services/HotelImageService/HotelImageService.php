<?php

namespace domain\Services\HotelImageService;
use App\Models\HotelImages;
use domain\Facades\ImageFacade\ImageFacade;

class HotelImageService {

    protected $hotel_image;

    public function __construct() {
        $this->hotel_image = new HotelImages();
    }

    public function store($data){

        // dd($data['image']);

        if(isset($data['image'])){
            $image = ImageFacade::store($data['image']);
            $image_id = $image->id;
        }

        $hotel_id = $data->hotel_id;
        $status = $data->status;

        return $this->hotel_image->create([
        'status' => $status,
        'image_id' => $image_id, 
        'hotel_id' => $hotel_id,

    ]);
                  
    }

    public function all($id){
        $hotelImge= $this->hotel_image->where('hotel_id',$id)->with('images')->orderBy('status', 'desc')->get();
        return $hotelImge;
    }
    public function delete($id){
        $this->hotel_image->destroy($id);
    }

    public function update($currentId, $requestId){

        $current = $this->hotel_image->where('id', $currentId)->first();
        $current->status = 0;
        $current->save();

        $require = $this->hotel_image->where('id', $requestId)->first();
        $require->status = 1;
        $require->save();

        return [$current,$require];
    }
}
