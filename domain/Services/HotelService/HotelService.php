<?php 

namespace domain\Services\HotelService;
use App\Models\Hotel;

class HotelService{

    protected $hotel;

    public function __construct(){
        $this->hotel = new Hotel();
    }

    public function store(array $data){
        return $this->hotel->create($data);
    }

    public function all(){
        return $this->hotel->with('hotelType')->get();
    }

    public function get(int $id){
        return $this->hotel->find($id);
    }

    public function update(int $id, array $data){
        
        $hotel = $this->hotel->find($id);
      
        return $hotel->update($data);
    }


    public function delete(int $id){
        return $this->hotel->destroy($id);
    }

    public function deleteSelected($data){
        $ids= $data->input('ids');
        Hotel::whereIn('id',$ids)->delete();

        return response()->json([ 
            'success'=> true,
            'message' => 'Item deleted successfully'
        
        ]);
    }

    public function count(){
        return $this->hotel->count();
    }
}