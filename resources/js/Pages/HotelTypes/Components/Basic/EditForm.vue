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
                            v-model="hotelTypes.name" required />
                    </div>

                </div>
                <div class="row mb-1">
                    <div for="price_range" class="col-md-3 col-form-label">PRICE RANGE</div>
                    <div class="col-md-9">
                        <select class="form-control form-control-sm" aria-label="Default select example"
                            v-model="hotelTypes.price_range">
                            <option value="1" class="text-dark">Budget: Rs.40,000 - 80,000 per day</option>
                            <option value="2" class="text-warning">Standard: Rs.100,000 - 300,000 per day</option>
                            <option value="3" class="text-success">Luxury: Rs.300,000 - 500,000 per day</option>
                        </select>
                    </div>

                </div>
                <div class="row mb-1">
                    <div for="max_occupancy" class="col-md-3 col-form-label">MAX OCCUPANCY</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="max_occupancy" id="max_occupancy"
                            v-model="hotelTypes.max_occupancy" placeholder="100-400" required />
                    </div>

                </div>
                <div class="row mb-1">
                    <div for="amenities" class="col-md-3 col-form-label">AMENITIES</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="amenities" id="amenities"
                            v-model="hotelTypes.amenities" placeholder="Private beach, Golf course, Kids club" required />
                    </div>
                    <small id="msg_" class="text-danger form-text text-error-msg error"></small>
                </div>
                <div class="row mb-1">
                    <div for="extra" class="col-md-3 col-form-label">EXTRA</div>
                    <div class="col-md-9">
                        <input type="text" class="form-control form-control-sm" name="extra" id="extra"
                            v-model="hotelTypes.extra" placeholder="All-inclusive packages available" required />
                    </div>
                    <small id="msg_" class="text-danger form-text text-error-msg error"></small>
                </div>
                <div class="text-right mt-2">
                    <div class="text-right">
                        <button type="button" class="btn btn-sm btn-round btn-outline-danger mb-0"
                            @click.prevent="deleteHotelType(hotelTypes.id)">
                            <font-awesome-icon />
                            DELETE
                        </button>
                        <button type="submit" class="btn btn-primary btn btn-sm btn-neutral"
                            @click.prevent="updateHotelTypeData(hotelTypes.id)">
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
    hotelTypeId: {
        type: Number,
        required: true
    }
});

const hotelTypes = ref([]);

const getHotelType = async () => {

    try {
        const response = await axios.get(route('hotelType.get', props.hotelTypeId));
        hotelTypes.value = response.data.hotelTypes;
        console.log(response.data.hotelTypes);
    } catch (error) {
        console.log('Error:', error);
    }
}

const deleteHotelType = async (id) => {
    try {
        const response = await axios.delete(route('hotelType.delete', id));
        resetData();
    } catch (error) {
        console.log('Error:', error);
    }
};

const updateHotelTypeData = async (id) => {
    try {
        const response = await axios.post(route('hotelType.update', id), hotelTypes.value);
        console.log(response);
    } catch (error) {
        console.log(error);
    }
};

const resetData = () => {
    hotelTypes.value = [];
}
onMounted(getHotelType);
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
  