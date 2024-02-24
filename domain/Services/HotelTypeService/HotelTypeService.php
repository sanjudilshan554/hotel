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

    public function all(){
        return $this->hotel_type->all();
    }

    public function delete($id){
        $this->hotel_type->destroy($id);
    }

    public function get($id){
        return $this->hotel_type->find($id);
    }

    // public function find($type){
    //     return $this->hotel_type->where('id', $type)->first();
    // }

    public function update($id, array $data){
        $hotelType=$this->hotel_type->find($id);
        return $hotelType->update($data);
    }

    public function deleteSelected($data){
        $ids= $data->input('ids');
        HotelType::whereIn('id',$ids)->delete();

        return response()->json([ 
            'success'=> true,
            'message' => 'Item deleted successfully'
        
        ]);
    }
}