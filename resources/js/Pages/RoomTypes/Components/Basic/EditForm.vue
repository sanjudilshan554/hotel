<template>
    <div id="basic-info">
        <div class="card-header">
            <h5>Basic Info</h5>
        </div>
        <div class="card-body pt-0 mt-3">
            <form>
                <div class="row mb-1">
                    <div for="name" class="col-md-3 col-form-label">NAME</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="name" id="name" placeholder="Luxury"
                            v-model="roomType.name" required />
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="price_range" class="col-md-3 col-form-label">PRICE RANGE</div>
                    <div class="col-md-9">
                        <select class="form-control form-control-sm" aria-label="Default select example"
                            v-model="roomType.price_range">
                            <option value="1" class="text-dark">Budget: Rs.40,00 - 80,00 per day</option>
                            <option value="2" class="text-warning">Standard: Rs.100,00 - 30,000 per day</option>
                            <option value="3" class="text-success">Luxury: Rs.300,00 - 500,00 per day</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="max_occupancy" class="col-md-3 col-form-label">MAX OCCUPANCY</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="max_occupancy" id="max_occupancy"
                            placeholder="1-6" v-model="roomType.max_occupancy" required />
                    </div>
                </div>
                <div class="row mb-1">
                    <div for="amenities" class="col-md-3 col-form-label">BED STEP</div>
                    <div class="col-md-9">
                        <select class="form-control form-control-sm" aria-label="Default select example"
                            v-model="roomType.bed_step">
                            <option value="1" class="">1 King. 2Twins</option>
                            <option value="2" class=""> 1 Queen</option>
                            <option value="3" class="">1King, 1Twin</option>
                        </select>
                    </div>
                    <small id="msg_" class="text-danger form-text text-error-msg error"></small>
                </div>
                <div class="row mb-1">
                    <div for="extra" class="col-md-3 col-form-label">EXTRA</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="extra" id="extra"
                            placeholder="All-inclusive packages available" v-model="roomType.extra" required />
                    </div>
                    <small id="msg_" class="text-danger form-text text-error-msg error"></small>
                </div>
                <div class="text-right mt-2">
                    <div class="text-right">
                        <button type="button" class="btn btn-sm btn-round btn-outline-danger mb-0"
                            @click.prevent="deleteRoomType(roomType.id)">
                            <font-awesome-icon />
                            DELETE
                        </button>
                        <button type="submit" class="btn btn-primary btn btn-sm btn-neutral"
                            @click.prevent="updateRoomTypeData(roomType.id)">
                            UPDATE
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>
  
<script setup>
import axios from 'axios'
import { ref, onMounted, defineProps } from 'vue';

const props = defineProps({
    roomTypeId: {
        type: Number,
        required: true
    }
});

const roomType = ref([]);

const getRoomType = async () => {
    try {
        const response = await axios.get(route('roomType.get', props.roomTypeId));
        roomType.value = response.data.roomType;
        console.log(roomType.value);
    } catch (error) {
        console.log('Error:', error);
    }
}

const deleteRoomType = async (id) => {
    try {
        const response = await axios.delete(route('roomType.delete', id));
        resetData();
    } catch (error) {
        console.log('Error:', error);
    }
};

const updateRoomTypeData = async (id) => {
    try {
        const response = await axios.post(route('roomType.update', id), roomType.value);
        console.log(response);
    } catch (error) {
        console.log(error);
    }
};

const resetData = () => {
    roomType.value = [];
}

onMounted(getRoomType);
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
</style>
  