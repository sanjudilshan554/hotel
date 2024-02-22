<?php 

namespace domain\Services\HotelTypeService;
use App\Models\HotelType;

class HotelTypeService{

    protected $hotel_type;

    public function __construct(){
        $this->hotel_type = new HotelType();
    }

    public function store($data){
        return $this->hotel_type->create($data);
    }

}