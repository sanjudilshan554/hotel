<template>
    <AppLayout title="Hotel-Management">
        <template #header>
            <div class="pb-6 header">
                <div class="">
                    <div class="">
                        <div class="py-4  col align-items-center">
                            <h6 class="mb-0 mt-5 h2 text-dark d-inline-block">Dashboard</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-block ">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <i class="fa-solid fa-house"></i>
                                    </li>
                                    <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                        Hotel Management System
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template #content>
            <div class="mt-3 row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4 card">
                                <div class="p-3 card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="mb-0 text-sm text-uppercase font-weight-bold">Total hotel types
                                                </p>
                                                <h5 class="font-weight-bolder">
                                                    {{ hotelTypes ? hotelTypes: 0 }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="text-center icon icon-shape bg-gradient-danger shadow-danger rounded-circle">
                                                <i class="fa-solid fa-bell-concierge"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4 card">
                                <div class="p-3 card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="mb-0 text-sm text-uppercase font-weight-bold">Total Room types
                                                </p>
                                                <h5 class="font-weight-bolder">
                                                    {{ roomTypes ? roomTypes: 0}}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="text-center icon icon-shape bg-gradient-primary shadow-primary rounded-circle">
                                                <i class="fa-solid fa-shower"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4 card">
                                <div class="p-3 card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="mb-0 text-sm text-uppercase font-weight-bold">Total Hotels
                                                </p>
                                                <h5 class="font-weight-bolder">
                                                   {{ hotels ? hotels: 0 }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="text-center icon icon-shape bg-gradient-success shadow-success rounded-circle">
                                                <i class="fa-solid fa-hotel"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4 card">
                                <div class="p-3 card-body">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="numbers">
                                                <p class="mb-0 text-sm text-uppercase font-weight-bold">Total Hotel Rooms</p>
                                                <h5 class="font-weight-bolder">
                                                    {{hotelRooms ? hotelRooms : 0}}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="col-4 text-end">
                                            <div
                                                class="text-center icon icon-shape bg-gradient-warning shadow-warning rounded-circle">
                                                <i class="fa-solid fa-box"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </AppLayout>
</template>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import axios from 'axios';
import { ref,onMounted } from 'vue';

const hotelTypes = ref(null);
const roomTypes = ref(null);
const hotels = ref(null);
const hotelRooms = ref(null);


const getCount = async () => {
   
    try {
        const hotel_types = await axios.get(route('hotelType.count'));
        const room_types = await axios.get(route('roomType.count'));
        const hotel = await axios.get(route('hotels.count'));
        const hotel_rooms = await axios.get(route('hotel.rooms.count'));

        roomTypes.value=room_types.data;
        hotelTypes.value=hotel_types.data;
        hotels.value=hotel.data;
        hotelRooms.value=hotel_rooms.data;

        console.log('hotel',hotels.value);
        
    } catch (error) {
        console.log('Error:', error);
    }
}


onMounted(getCount)
</script>

<style scoped>
.breadcrumb-text {
    color: #6343e9 !important;
}

.icon{
    color: white;
}
</style>