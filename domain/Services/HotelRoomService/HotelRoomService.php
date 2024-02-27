<?php

namespace domain\Services\HotelRoomService;
use App\Models\HotelRooms;
use domain\Facades\ImageFacade\ImageFacade;
use domain\Facades\ImageFacade\ImagesFacade;


class HotelRoomService {

    protected $hotel_room;

    public function __construct() {
        $this->hotel_room = new HotelRooms();
    }

    public function store($data){

        //  dd($data['image']);

        if(isset($data['image'])){
            $image = ImageFacade::store($data['image']);
            $image_id = $image->id;
        }
      
        $room_type = $data->input('room_type');
        $room_number= $data->input('room_number');
        $avilability= $data->input('avilability');
        $view= $data->input('view');
        $ameninies= $data->input('amenities');
        $hotel_id=$data->input('hotel_id');
        $room_type_id=$data->input('room_type_id');
       

        return $this->hotel_room->create([
         'room_type' => $room_type,
         'room_number'=> $room_number,
         'avilability'=> $avilability,
         'view'=> $view,
         'amenities'=> $ameninies,
         'image_id' => $image_id,
         'hotel_id' => $hotel_id,
         'room_type_id'=> $room_type_id,
        ]);
    }

    public function update($requestId,$data,$image_id){

        if(isset($data['image'])){
            $image = ImageFacade::update($data['image'],$image_id);
        }
        
        $exist_hotel_room = $this->hotel_room->findOrFail($requestId);

        $room_type = $data->input('room_type');
        $room_number= $data->input('room_number');
        $avilability= $data->input('avilability');
        $view= $data->input('view');
        $ameninies= $data->input('amenities');
        $hotel_id=$data->input('hotel_id');
        $room_type_id=$data->input('room_type_id');

        $exist_hotel_room->update([
         'room_type' => $room_type,
         'room_number'=> $room_number,
         'avilability'=> $avilability,
         'view'=> $view,
         'amenities'=> $ameninies,
         'image_id' => $image_id,
         'hotel_id' => $hotel_id,
         'room_type_id'=> $room_type_id,
        ]);

        return $exist_hotel_room;
    }

    public function get($hotelId){
        return $this->hotel_room->where('hotel_id',$hotelId)->with('images')->get();
    }

    public function count(){
        return $this->hotel_room->count();
    }

    public function delete($id){
        return $this->hotel_room->where('id',$id)->delete();
    }

    public function edit($id){
        return $this->hotel_room->where('id',$id)->get();
    }
}