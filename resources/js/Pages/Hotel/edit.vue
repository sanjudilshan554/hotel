<template>
    <AppLayout title="Vendor - Edit">
        <template #header>
            <div class="pb-6 header">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="py-4 row align-items-center">
                            <div class="col-lg-6 mt-5">
                                <h6 class="mb-0 h2 text-dark d-inline-block">
                                    Hotel {{ hotels.name }}
                                </h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-block">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <Link href="/">
                                            <font-awesome-icon icon="fa-solid fa-house" color="#505050" />
                                            </Link>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <Link class="breadcrumb-text">
                                            Hotel Management
                                            </Link>
                                        </li>
                                        <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                            <!-- #{{ this.customer.code }} -->
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template #content>
            <div class="mt-4 row">
                <div class="col-lg-2 col-md-2">
                    <div class="nav-wrapper-loc">
                        <ul class="nav nav-pills nav-fill flex-column" id="tabs-icons-text" role="tablist">
                            <li class="mb-2 nav-item">
                                <a class="nav-link active" id="basic-data-tab" data-toggle="tab" href="#basic-data"
                                    role="tab" aria-controls="basic-data" aria-selected="true">
                                    Hotel's Data</a>
                            </li>
                            <li class="mb-2 nav-item">
                                <a class="nav-link" id="hotel-images-tab" data-toggle="tab" href="#hotel-images" role="tab"
                                    aria-controls="hotel-images" aria-selected="true">
                                    Hotel's Images</a>
                            </li>
                            <li class="mb-2 nav-item">
                                <a class="nav-link" id="hotel-rooms-tab" data-toggle="tab" href="#hotel-rooms" role="tab"
                                    aria-controls="hotel-rooms" aria-selected="true">
                                    Hotel's Rooms</a>
                            </li>
                            <li hidden></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-10 col-md-10">
                    <div class="shadow card">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="basic-data" role="tabpanel">
                                    <BasicEditForm :hotelId="hotels.id"/>
                                </div>
                                <div class="tab-pane fade show" id="hotel-images" role="tabpanel">
                                    <HotelImagesAll />
                                </div>
                                <div class="tab-pane fade show" id="hotel-rooms" role="tabpanel">
                                    <HotelRoomsAll />
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
import { Link } from "@inertiajs/vue3";
import { defineProps, onMounted } from 'vue';
import BasicEditForm from '@/Pages/Hotel/Components/Basic/EditForm.vue';
import HotelImagesAll from '@/Pages/Hotel/Components/HotelImages/All.vue';
import HotelRoomsAll from '@/Pages/Hotel/Components/HotelRooms/All.vue';
import axios from "axios";



const props = defineProps({
    hotels:{
        type:Object,
        required:true
    }
});


</script>

<style lang="scss" scoped>
.breadcrumb-text {
    color: #6343e9 !important;
}

.nav-link.active {
    background-color: #6343e9 !important;
    color: #fff !important;
}
</style>
