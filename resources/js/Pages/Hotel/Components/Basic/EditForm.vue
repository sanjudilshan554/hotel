<template>
    <div id="basic-info">
        <div class="card-header">
            <h5>Basic Info</h5>
        </div>
        <div class="card-body pt-0 mt-3">
            <form>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">NAME</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="name" id="name"
                            v-model="hotelData.name" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">EMAIL</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" placeholder="mountlavinia@gmail.com"
                            name="email" id="email" v-model="hotelData.email" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">ADDRESS</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="address" id="address"
                            placeholder="current hotel address" v-model="hotelData.address" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">PHONE</div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-6 column__right___padding">
                                <label>NUMBER 1</label>
                                <input class="form-control form-control-sm" type="text" name="contact_1" id="inp_contact_1"
                                    placeholder="Number 1" v-model="hotelData.contact_1" />
                                <small id="msg_contact_1" class="text-danger form-text text-error-msg error"></small>
                            </div>
                            <div class="col-lg-6 column__left___padding">
                                <label>NUMBER 2</label>
                                <input class="form-control form-control-sm" type="text" name="contact_2" id="inp_contact_2"
                                    placeholder="Number 2" v-model="hotelData.contact_2" />
                                <small id="msg_contact_2" class="text-danger form-text text-error-msg error"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">HOTEL TYPE</div>
                    <div class="col-md-10">
                        <select class="form-control form-control-sm" aria-label="Default select example"
                            v-model="hotelData.type" >
                            <option :value="hotelData.type" class="text-dark" hidden>{{ hotelData.typeName }}</option>
                            <option v-for="value in hotelTypes" :key="value.id" :value="value.id">{{ value.name }}</option>
                        </select>
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">WEBSITE</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city"
                            placeholder="www.mountlavinia.com" v-model="hotelData.web_site" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">CITY</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city"
                            v-model="hotelData.city" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">CHECK IN/OUT DATE</div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-lg-6 column__right___padding">
                                <label>CHECK IN</label>
                                <input class="form-control form-control-sm" type="date" name="check-in" id="check-in"
                                    placeholder="check-in" v-model="hotelData.check_in_date" />
                                <small id="msg_contact_1" class="text-danger form-text text-error-msg error"></small>
                            </div>
                            <div class="col-lg-6 column__left___padding">
                                <label>CHECK OUT</label>
                                <input class="form-control form-control-sm" type="date" name="check-out" id="check-out"
                                    placeholder="check-out" v-model="hotelData.check_out_date" />
                                <small id="msg_contact_2" class="text-danger form-text text-error-msg error"></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="name" class="col-md-2 col-form-label">DESCRIPTION</div>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" name="city" id="city"
                            placeholder="descript..." v-model="hotelData.description" />
                        <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                    </div>
                </div>
                <div class="text-right">
                    <button type="button" class="btn btn-sm btn-round btn-outline-dark mb-0" @click.prevent=resetData()>
                        <font-awesome-icon icon="fa-solid fa-trash" />
                        RESET
                    </button>
                    <button type="button" class="btn btn-sm btn-round btn-outline-danger mb-0" @click.prevent=deleteHotel(hotelData.id)>
                        <font-awesome-icon icon="fa-solid fa-trash" />
                        DELETE
                    </button>
                    <button type="submit" class="btn btn-round custom-button btn-sm mb-0" @click.prevent="updateBasicData(hotelData.id)">
                        <font-awesome-icon icon="fa-solid fa-floppy-disk" />
                        SAVE
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
  
<script setup>
import axios from 'axios';
import { ref, onMounted, defineProps } from 'vue';

const hotelData = ref([]);

const hotelTypes = ref([]);

const props = defineProps({
    hotelId: {
        type: Number,
        required: true,
    }
});

const getHotelType = async (id) => {
    try {
        const response = await axios.get(route('hotelType.get', id));
        console.log(response.data);
        const selectedHotelType = response.data.hotel_type
        hotelData.value.typeName = selectedHotelType.name;
        hotelData.value.type = selectedHotelType.id;
    } catch (error) {
        console.log('Error:', error);
    }
}

const getHotelTypes = async () => {
    try {
        const response = await axios.get(route('hotelType.all'));
        hotelTypes.value = response.data.hotel_types;
        console.log('hotel types:',hotelTypes.value);
    } catch (error) {
        console.log(error);
    }
}

const getHotelData = async () => {
    try {
        const response = await axios.get(route('hotels.get', props.hotelId));
        hotelData.value = response.data.hotels;
        const hotelTypeId = hotelData.value.type;
        getHotelType(hotelTypeId);
    } catch (error) {
        console.log(error);
    }
}

const updateBasicData = async (id) => {
    try{
        const response = await axios.post(route('hotels.basic.update',id),hotelData.value);
        resetData();
        resetSavedData();
        console.log(response);
    }catch(error){
        console.log('Error:',error);
    }
}

const resetData = () =>{
    hotelData.value.email = '';
    hotelData.value.address = '';
    hotelData.value.contact_1 = '';
    hotelData.value.contact_2 = '';
    hotelData.value.web_site = '';
    hotelData.value.check_in_date = '';
    hotelData.value.check_oute_date ='';
    hotelData.value.description ='';
}

const resetSavedData = () =>{
    hotelData.value.name = '';
    hotelData.value.type = '';
    hotelData.value.city = '';
    hotelData.value.typeName = '';

}

const deleteHotel = async (id) => {
    try{
        const response = await axios.delete(route('hotels.basic.delete',id));
        resetData();
        resetSavedData();
    }catch(error){
        console.log('Error:',error);
    }
}

onMounted(() => {
    getHotelData();
    getHotelTypes();
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
}</style>
  