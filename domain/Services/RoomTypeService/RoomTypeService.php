<?php

namespace domain\Services\RoomTypeService;
use App\Models\RoomType;

class RoomTypeService {

    protected $room_type;

    public function __construct() {
        $this->room_type = new RoomType();
    }

    public function store($data){
        return $this->room_type->create($data);
    }

    public function delete($id){
        $this->room_type->destroy($id);
    }

    public function all(){
        return $this->room_type->all();
    }

    public function find($id){
        return $this->room_type->find($id);
    }

    public function update($id, $data){
        $hotelType= $this->room_type->find($id);
        return $hotelType->update($data);
    }

    public function count(){
        return $this->room_type->count();
    }
}