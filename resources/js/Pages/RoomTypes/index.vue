<template>
    <AppLayout title="Room Types">

        <template #header>
            <div class="header  pb-6">
                <div class="container-fluid ">
                    <div class="header-body ">
                        <div class="row align-items-center mb-1 ">
                            <div class="col-lg-8 mt-5">
                                <h6 class="h2 text-dark d-inline-block mb-0 mt-5">Room Types</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-block">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <i class="fa-solid fa-house"></i>
                                        </li>
                                        <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                            Room Type
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="col-lg-4 text-right py-4">

                                <button type="button" class="btn btn-primary btn btn-sm btn-neutral float-end"
                                    data-toggle="modal" data-target="#exampleModal">
                                    <font-awesome-icon icon="fa-solid fa-circle-plus" /> ADD NEW
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template #content>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shadow card">
                        <div class="row mx-4 mt-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th :class="iconClassHead">#</th>
                                            <th :class="textClassHead">Name</th>
                                            <th :class="textClassHead">Price range</th>
                                            <th :class="textClassHead">Max Occupancy</th>
                                            <th :class="valueClassHead">BED STEP</th>
                                            <th :class="valueClassHead">Extra</th>
                                            <th :class="textClassHead">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="value in roomTypeData" class="">
                                            <td class="checkArea">
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox" />
                                                </div>
                                            </td>{{ room_types }}
                                            <td class="textClassBody">
                                                {{ value.name }}
                                            </td>
                                            <td class="textClassBody">
                                                <div class="" v-if="value.price_range == 1"> Budjet</div>
                                                <div class="" v-else-if="value.price_range == 2"> Standard</div>
                                                <div class="" v-else> Luxury</div>
                                            </td>
                                            <td class="textClassBody">
                                                {{ value.max_occupancy }}
                                            </td>
                                            <td class="textClassBody">
                                                <div class="" v-if="value.price_range == 1"> 1 King. 2Twins</div>
                                                <div class="" v-else-if="value.price_range == 2"> 1 Queen</div>
                                                <div class="" v-else> 1King, 1Twin</div>
                                            </td>
                                            <td class="textClassBody">
                                                {{ value.extra }}
                                            </td>
                                            <td class="textClassBody">

                                                <div class="float-left">
                                                    <a href="javascript:void(0)" class="edit"
                                                        @click.prevent="editHotelType(value.id)"> <i
                                                            class="fas fa-edit"></i></a>
                                                </div>
                                                <div class="float-left">
                                                    <a href="javascript:void(0)" class="delete"
                                                        @click.prevent="deleteHotelType(value.id)"> <i
                                                            class="fa-solid fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="flex mt-1 px-3 mx-1 card-footer table-footer align-items-center">
                            <div class="col-sm-12 col-md-6 p-0">
                                <div class="dataTables_info column__left___padding" id="DataTables_Table_0_info"
                                    role="status" aria-live="polite">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 p-0">
                                <div class="dataTables_paginate paging_simple_numbers column__right___padding"
                                    id="DataTables_Table_0_paginate">
                                    <nav aria-label="Page navigation" style="float: right">
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template #modals>
            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="newVendorModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-mb" role="document">
                    <div class="modal-content p-2">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bolder breadcrumb-text text-gradient" id="add_brandLabel">
                                New Room Type
                            </h5>
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <i class="fa fa-times"></i>
                                </span>
                            </button>
                        </div>
                        <div class="modal-body p-0">
                            <div class="card-plain">
                                <div class="card-body">
                                    <form>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">NAME</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code" v-model="roomType.name"
                                                    id="code" placeholder="Single room" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">PRICE RANGE</div>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-sm" aria-label="Default select example" v-model="roomType.price_range"
                                                    required>
                                                    <option value="1">Budget: Rs.4000 - Rs.8000 per day</option>
                                                    <option value="2">Standard: Rs.10000 - Rs.30000 per day</option>
                                                    <option value="3">Luxury: Rs.30000 - Rs.50000 per day</option>
                                                </select>
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">MAX-OCCUPANCY</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="code" placeholder="1-8" v-model="roomType.max_occupancy" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">BED STEP</div>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-sm" aria-label="Default select example" v-model="roomType.bed_step"
                                                required>
                                                    <option value="1">1 King. 2Twins</option>
                                                    <option value="2">1 Queen</option>
                                                    <option value="3">1King, 1Twin</option>
                                                </select>
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">EXTRA</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="code" placeholder="Extra..." v-model="roomType.extra" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="text-right mt-2" >
                                            <button type="submit" class="btn btn-round custom-button btn-sm mb-0" @click.prevent="createRoomType()">
                                                <font-awesome-icon icon="fa-solid fa-floppy-disk" />
                                                CREATE
                                            </button>
                                        </div>
                                    </form>
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
import AppLayout from '@/Layouts/AppLayout.vue'
import axios from 'axios';
import { ref, onMounted } from 'vue';

const roomType = ref({
    name:'',
    price_range:'',
    max_occupancy:'',
    bed_step:'',
    extra:'',
});

const roomTypeData = ref([]);

const createRoomType = async () => {
    try{
        const response = await axios.post(route('roomType.store'),roomType.value);
    }catch(error){
        console.log('Error:',error);
    }
}

const getRoomTypes = async () => {
    try{
        const response = await axios.get(route('roomType.all'));

        console.log(response);
        roomTypeData.value=response.data.room_types;
        console.log(roomTypeData.value);
    }catch(error){
        console.log('Error:',error);
    }
}

onMounted(getRoomTypes);
</script>

<style scoped>
.breadcrumb-text {
    color: #6343e9 !important;
}

.custom-button {
    background-color: #ffffff;
    border-color: #6343e9;
    color: #6343e9 !important;
}

.custom-button:hover {
    background-color: #6343e9;
    color: #ffffff !important;
}
.float-left {
    float: left;
    margin-right: 10px;
}

.edit {
    color: blue;
    background-color: none;
    border: none;
    border-style: none;
}

.delete {
    color: red;
}
</style>
