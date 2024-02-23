<template>
    <div id="basic-info">
        <div class="card-header">
            <h5>Hotel Images</h5>
        </div>
        <div class="card-body pt-0 mt-3">
            <div class="col pt-2 image-header">
                <div class="">
                    <input type="file" class="form-control file" id="fileInput" @change="onImageChange">           
                    <button @click.prevent="createHotelImage()"
                    class="btn btn-sm btn-round btn-outline-success">Upload</button>
                </div>
            </div>
            <div class="image-setup image-section border ">
                <div  v-for="value in hotelImageData" class="card card-img-top image-section text-center" style="width: 14rem; height: 14rem;">
                    <img class="card-img-top" :src="value.url" alt="dfdsfds" style="width: 10rem; height: 10rem;">
                    <div class="image-card-body pt-4">
                        <div class="">
                            <div class="" v-if="value.id == firstImageId">
                                <button class="btn btn-sm btn-round btn-outline-danger mb-0"
                                 disabled>DELETE</button>

                                <button class="btn btn-round custom-button btn-sm mb-0"
                                 disabled>MAKE PRIMARY</button>
                            </div>   

                            <div class="" v-else>
                                <button class="btn btn-sm btn-round btn-outline-danger mb-0"
                                 @click.prevent="deleteImage(value.id)">DELETE</button>
                                <a href="#" class="btn btn-round custom-button btn-sm mb-0"
                                @click.prevent="makePrimary(value.id)">MAKE PRIMARY</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, defineProps } from 'vue';
import axios from 'axios';

const props = defineProps({
    hotelId:{
        type:Number,
        required:true
    }
});

const hotelImage = ref([]);

const hotelImageData = ref([]);

const firstImageId = ref(0);

const createHotelImage = async () => {
    try {
        console.log('image',props.hotelId);
        const formData = new FormData();
        formData.append('image', hotelImage.value.image);
        formData.append('hotel_id', props.hotelId);
        formData.append('status', 0);
        const response = await axios.post(route('hotel.image.store'), formData);
        getHotelImages();
    } catch (error) {
        console.log('Error:', error);
    }
}

const getHotelImages = async () => {
    try{
        const response = await axios.get(route('hotel.image.all'));
        hotelImageData.value=response.data.hotel_images;

        for(let i=0; i<hotelImageData.value.length; i++){
            if(hotelImageData.value[i].status==1){
                firstImageId.value=hotelImageData.value[i].id;
            }
        }
        console.log('image',firstImageId.value);
    }catch(error){
        console.log('Error',error);
    }
}


const makePrimary = async (imageId) => {
    try {
        await updateImageStatus(firstImageId.value,imageId);

    } catch (error) {
        console.log('Error:', error);
    }
}

const updateImageStatus = async (firstImageId, imageId) => {
    try {
        console.log(imageId);
        const response = await axios.post(route('hotel.image.update', {firstImageId,imageId}));
        console.log(response);
        getHotelImages();
    } catch (error) {
        console.log('Error:', error);
    }
}

const onImageChange = (e) => {
    console.log(e.target.files[0]);
    hotelImage.value.image = e.target.files[0];

}

const deleteImage = async (id) => {
    console.log('hi');
    try {
        const response = await axios.get(route('hotel_image.delete', id));
        getHotelImages();
        console.log(response);
    } catch (error) {
        console.log('Error:', error);
    }
}

onMounted(() => {
    getHotelImages();
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
}

.card-img-top{
    
}
</style>
  