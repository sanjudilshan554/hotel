<?php

namespace App\Http\Controllers;

use App\Models\HotelImages;
use domain\Facades\HotelImageFacade\HotelImageFacade;
use Illuminate\Http\Request;

class HotelImageController extends Controller
{
    protected $image;

    public function __construct(){
        $this->image = new HotelImages();
    }

    public function store(Request $request){
        
        $hotelId= $request->input("hotel_id");

        $firstImageid= $this->image->where('hotel_id',$hotelId)->first();
        
        if($firstImageid){
            $response['hotel_image']=HotelImageFacade::store($request);
            return $response;
        }else{
            $status = 1;
            $request->merge(['status'=>$status]);
            $response['hotel_image']=HotelImageFacade::store($request);
            return $response;
        } 
    }

    public function all($id){
        $response['hotel_images']=HotelImageFacade::all($id);
        return $response;
    }

    public function delete($id){
        return HotelImageFacade::delete($id);
    }

    public function update(Request $request){

        $currentPrimaryImageId = $request->input('firstImageId');
        $requiredPrimaryImageId = $request->input('imageId');

        return HotelImageFacade::update( $currentPrimaryImageId,$requiredPrimaryImageId);
    }

}
