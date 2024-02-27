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

            <div class="image-setup image-top-header border mt-2">
                <div v-for="value in hotelImageData" class="card image-section text-center"
                    style="width: 22rem; height: 18rem;">
                    <img class="card-img-top" :src="access_path + '/' + value.images?.name" alt="dfdsfds"
                        style="width: 18rem; height: 14rem;">
                    <div class="image-card-body pt-4">
                        <div class="">
                            <div class="" v-if="value.id == firstImageId">
                                <button class="btn btn-sm btn-round btn-outline-danger mb-0" disabled>DELETE</button>

                                <button class="btn btn-round custom-button btn-sm mb-0" disabled>MAKE PRIMARY</button>
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
import Swal from 'sweetalert2';
const props = defineProps({
    hotelId: {
        type: Number,
        required: true
    }
});

const hotelImage = ref([]);
const hotelImageData = ref([]);
const firstImageId = ref(0);
const access_path = ref({});

const createHotelImage = async () => {
    try {
        console.log('image', props.hotelId);
        const formData = new FormData();
        formData.append('image', hotelImage.value.image);
        formData.append('hotel_id', props.hotelId);
        formData.append('status', 0);
        const response = await axios.post(route('hotel.image.store'), formData);
        getHotelImages(props.hotelId);
    } catch (error) {
        console.log('Error:', error);
    }
}

const getHotelImages = async (id) => {

    try {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 1400,
            timerProgressBar: true,
            didOpen: async (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
                try {
                    const response = await axios.get(route('hotel.image.all', id));
                    hotelImageData.value = response.data.hotel_images;
                    console.log('hotel data', response.data.hotel_images);
                    console.log('access path', response.data.access_path);
                    access_path.value = response.data.access_path;
                    for (let i = 0; i < hotelImageData.value.length; i++) {
                        if (hotelImageData.value[i].status == 1) {
                            firstImageId.value = hotelImageData.value[i].id;
                        }
                    }
                    console.log('image', firstImageId.value);
                } catch (error) {
                    console.log('Error', error);
                }
            }
        });
        Toast.fire({
            icon: "success",
            title: "Data loaded successfully"
        });

    } catch (error) {
        console.log('Error:', error);
    }
}


const makePrimary = async (imageId) => {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-sm btn-round btn-outline-warning mb-0",
            cancelButton: "btn btn-sm btn-round btn-outline-primary mb-0"
        },
        buttonsStyling: false
    });
    swalWithBootstrapButtons.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        cancelButtonText: "keep previous",
        confirmButtonText: "Change as primary",

        reverseButtons: true
    }).then(async (result) => {
        if (result.isConfirmed) {
            await updateImageStatus(firstImageId.value, imageId);
            swalWithBootstrapButtons.fire({
                title: "updated!",
                text: "primary image updated successfully",
                icon: "success"
            });
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire({
                title: "Cancelled",
                text: "Your previous image is safe :)",
                icon: "error"
            });
        }
    });

}

const updateImageStatus = async (firstImageId, imageId) => {
    try {
        console.log(imageId);
        const response = await axios.post(route('hotel.image.update', { firstImageId, imageId }));
        console.log(response);
        getHotelImages(props.hotelId);
    } catch (error) {
        console.log('Error:', error);
    }
}

const onImageChange = (e) => {

    console.log(e.target.files[0]);
    hotelImage.value.image = e.target.files[0];

}

const deleteImage = async (id) => {

    try {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then(async (result) => {
            if (result.isConfirmed) {
                try {
                    const response = await axios.get(route('hotel_image.delete', id));
                    getHotelImages(props.hotelId);
                    console.log(response);
                } catch (error) {
                    console.log('Error:', error);
                }
                Swal.fire({
                    title: "Deleted!",
                    text: "Your image has been deleted.",
                    icon: "success"
                });
            }
        });

    } catch (error) {
        console.log('Error', error);
    }
}

onMounted(() => {
    getHotelImages(props.hotelId);
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
</style>
  