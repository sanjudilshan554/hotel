<template>
    <div id="basic-info">
        <div class="card-header">
            <div class="row">
                <div class="col-md-2">
                    <h5>Hotel Rooms</h5>
                </div>
                <!-- <div class="col-md-2">
                    <div class="form-group col-form-label">
                        <label for="exampleFormControlSelect2">Avilable room</label>
                        <select v-model="hotel_room_id" class="form-control  form-control-sm" id="exampleFormControlSelect2"
                            @click="getHotelRooms">
                            <option value="select" selected hidden>select</option>
                            <option v-for="value in roomCount" :key="value.id" :value="value.id">RN: {{ value.room_number }}
                            </option>
                        </select>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="card-body pt-0 mt-1 pt-4">
            <form enctype="multipart/form-data">
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">ROOM TYPE</div>
                    <div class="col-md-10">
                        <select class="form-control form-control-sm" aria-label="Default select example"
                            v-model="hotelRoom.room_type">
                            <option value="" class="text-dark" selected hidden> Select Room Type </option>
                            <option v-for="value in roomTypes" :key="value.id" :value="value.id">{{ value.name }}</option>
                        </select>
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">ROOM NUMBER</div>
                    <div class="col-md-2">
                        <input type="number" v-model="hotelRoom.room_number" class="form-control form-control-sm" min="1"
                            name="number" id="number" placeholder="101" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row">
                    <div for="name" class="col-md-2 col-form-label">AVILABILITY</div>
                    <div class="col-md-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" v-model="hotelRoom.avilability" type="radio"
                                name="inlineRadioOptions" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Avilable </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" v-model="hotelRoom.avilability" type="radio"
                                name="inlineRadioOptions" id="inlineRadio2" value="0">
                            <label class="form-check-label" for="inlineRadio2">Not Avilable</label>
                        </div>
                        <small id="msg_name" class="text-danger form-text text-error-msg error "></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">VIEW</div>
                    <div class="col-md-10">
                        <input type="text" v-model="hotelRoom.view" class="form-control form-control-sm" name="view"
                            id="view" placeholder="Ocean View" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">AMENITIES</div>
                    <div class="col-md-10">
                        <input type="text" v-model="hotelRoom.amenities" class="form-control form-control-sm"
                            name="amenities" id="amenities" placeholder="Wi-Fi, TV, Mini Fridge" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">IMAGE</div>
                    <div class="col-md-10">
                        <input type="file" class="form-control form-control-sm" name="image" id="image"
                            @change="onImageChange" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-round btn-outline-dark mb-0" @click.prevent="resetData()">
                        <font-awesome-icon icon="fa-solid fa-trash" />
                        RESET
                    </button>
                    <button class="btn btn-round btn-outline-danger btn-sm mb-0" @click.prevent="deleteHotelRoom()">
                        <font-awesome-icon icon="fa-solid fa-floppy-disk" />
                        DELETE
                    </button>
                    <button class="btn btn-round custom-button btn-sm mb-0" @click.prevent="createHotelRoom()">
                        <font-awesome-icon icon="fa-solid fa-floppy-disk" />
                        SAVE
                    </button>
                </div>
            </form>
        </div>
        <div class="card-header">
            <div class="row">
                <div class="col-md-2">
                    <h5>Avilable Rooms</h5>
                </div>
                <div class="image-setup image-top-header border mt-2">
                
                    <div v-for="value in hotelRoom"  class="card image-section text-center"
                        style="width: 22rem; height: 18rem;">
                        <img class="card-img-top" :src="access_path + '/' + value.images?.name" alt="dfdsfds" style="width: 18rem; height: 14rem;">
                        <div class="image-card-body pt-4">
                            <div class="">
                                <div class="" >
                                    <button class="btn btn-sm btn-round btn-outline-danger mb-0"
                                        @click.prevent="deleteImage(value.id)">DELETE ROOM</button>
                                    <a href="#" class="btn btn-round custom-button btn-sm mb-0"
                                        @click.prevent="makePrimary(value.id)">EDIT DETAILS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script setup>
import axios from 'axios';
import { ref, onMounted, defineProps } from 'vue'

const roomTypes = ref([]);

const props = defineProps({
    hotelId: {
        type: Number,
        required: true
    }
});

const room_type_id = ref({});
const hotel_room_id = ref({});
const access_path = ref({});

const hotelRoom = ref({
    room_type: '',
    room_number: '',
    view: '',
    amenities: '',
    image: '',
    hotel_id: '',
    avilability: 0,
});

const getHotelRooms = async () => {
    try {
        const response = await axios.get(route('hotel.rooms.get', props.hotelId));
        console.log('hotel rooms',response.data.hotel_rooms);
        console.log('access_path',response.data.access_path);
        hotelRoom.value= response.data.hotel_rooms;
        access_path.value = response.data.access_path;
    } catch (error) {
        console.log('Error: ', error);
    }
}


const resetData = () => {

    hotel_room_id.value = ','
    room_type_id.value = '',
    hotelRoom.value.view = '';
    hotelRoom.value.room_type = '';
    hotelRoom.value.avilability = 0;
    hotelRoom.value.room_number = '';
    hotelRoom.value.amenities = '';

    const inputElement = document.getElementById('image');
    if (inputElement) {
        inputElement.value = '';
    }
    hotelRoom.value.image = null;
}

const getRoomTypes = async () => {
    try {
        const response = await axios.get(route('roomType.all'));
        roomTypes.value = response.data.room_types;
    } catch (error) {
        console.log('Error:', error);
    }
}

const getRoomTyepId = async (id) => {
    try {
        const response = await axios.get(route('roomType.get', id));
        console.log(response);
        room_type_id.value = response.data.room_type.id;
    } catch (error) {
        console.log('Error:', error);
    }
}

const createHotelRoom = async () => {
    try {
        getRoomTyepId(hotelRoom.value.room_type);
        const formData = new FormData();
        formData.append('room_type', hotelRoom.value.room_type);
        formData.append('room_number', hotelRoom.value.room_number);
        formData.append('avilability', hotelRoom.value.avilability);
        formData.append('amenities', hotelRoom.value.amenities);
        formData.append('view', hotelRoom.value.view);
        formData.append('image', hotelRoom.value.image);
        formData.append('hotel_id', props.hotelId);
        formData.append('room_type_id', hotelRoom.value.room_type);
        formData.append('exist_id', hotel_room_id.value);
        const response = await axios.post(route('hotel.rooms.store'), formData);
        resetData();
        getHotelRooms();
        console.log('response', response);
    } catch (error) {
        console.log(error);
    }
}

const onImageChange = (e) => {
    hotelRoom.value.image = e.target.files[0];
}

const deleteHotelRoom = async () => {
    try {
        const response = await axios.get(route('hotel.rooms.delete', hotel_room_id.value));
        resetData();
        getHotelRooms();
        console.log('heelo', response);
    } catch (error) {
        console.log('Error:', error);
    }
}

onMounted(() => {
    getRoomTypes();
    getHotelRooms();
});


</script>
  
<style lang="scss" scoped>
.custom-button {
    background-color: #ffffff;
    border-color: #6343e9;
    color: #6343e9 !important;
}

.custom-button:hover {
    background-color: #6343e9;
    color: #ffffff !important;
}

.image-section {
    background-color: white;
}

.image-section {
    float: left;
    overflow: hidden;
    margin: 2vh;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.image-section:hover{
    box-shadow: 1px 1px 15px rgb(81, 81, 231);
    transition: 0.2s ease-in-out;
   
}

</style>
  