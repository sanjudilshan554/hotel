<template>
    <AppLayout>
        <template #header>
            <div class="header  pb-6">
                <div class="container-fluid ">
                    <div class="header-body ">
                        <div class="row align-items-center mb-1 ">
                            <div class="col-lg-8 mt-5">
                                <h6 class="h2 text-dark d-inline-block mb-0 mt-5">Hotels</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-block">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <i class="fas fa-home"></i>
                                        </li>
                                        <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                             Types / Hotel Type
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
            <div class="row ">
                <div class="col-lg-12 mt-5">
                    <div class="card shadow">
                        <div class="row my-3 mx-2 row mx-4">
                            <div class="table-responsive">
                                <div class="d-flex flex-row mb-3 rounded">
                                    <div class="left d-flex">
                                        <div class="p-2 border icon_item">
                                            <i class="fa-solid fa-clone icon_item-icon" color="#505050"></i>
                                        </div>
                                        <div class="p-2 border icon_item">
                                            <i class="fa-solid fa-arrow-up-from-bracket icon_item-icon" color="#505050"></i>

                                        </div>
                                        <div class="p-2 border icon_item">
                                            <i class="fa-solid fa-cloud-arrow-down icon_item-icon" color="#505050"></i>

                                        </div>
                                        <div class="p-2 border icon_item">
                                            <i class="fa-solid fa-wrench icon_item-icon" color="#505050"></i>

                                        </div>
                                        <div class="p-2 border icon_item">
                                            <a>
                                                <i class="fa-solid fa-circle-check icon_item-icon" color="#505050"></i>

                                            </a>
                                        </div>
                                        <div class="p-2 border icon_item">
                                            <a>
                                                <i class="fa-solid fa-circle-minus icon_item-icon" color="#505050"></i>

                                            </a>
                                        </div>
                                        <div class="p-2 border ">
                                            <a href="javascript:void(0)" @click="deleteSelectedItems">
                                                <i class="fa-solid fa-trash-can icon_item-icon btn btn-danger btn-sm"
                                                    color="#505050"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="right d-flex ml-auto">
                                        <div class="p-2 border icon_item">
                                            <i class="fa-solid fa-print icon_item-icon" color="#505050"></i>
                                        </div>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="checkArea">
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox" @change="selectAllItems"
                                                        v-model="selectAll" />
                                                </div>
                                            </th>
                                            <th class="textClassHead">Name</th>
                                            <th class="textClassHead">Price range</th>
                                            <th class="textClassHead">Mac Occupancy</th>
                                            <th class="textClassHead">Amenities</th>
                                            <th class="textClassHead">Extra</th>
                                            <th class="textClassHead">Action</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="value, index in hotelTypeData"  :key="index" class="">
                                            <td class="checkArea">
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox" :value="index"
                                                        v-model="selectedItems" />
                                                </div>
                                            </td>
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
                                                {{ value.amenities }}
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
                                    <!-- Showing {{ pagination.from }} to {{ pagination.to }} of {{ pagination.total }} entries -->
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 p-0">
                                <div class="dataTables_paginate paging_simple_numbers column__right___padding"
                                    id="DataTables_Table_0_paginate">
                                    <nav aria-label="Page navigation" style="float: right">
                                        <ul class="pagination">
                                            <!-- Pagination buttons  -->
                                        </ul>
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
                                New Hotel Type
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
                                            <div for="name" class="col-md-3 col-form-label">NAME</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="name"
                                                    id="name" placeholder="Luxury" v-model="hotelTypes.name" required />
                                            </div>
                                            <!-- <small id="msg_" class="text-danger form-text text-error-msg error"></small> -->
                                        </div>
                                        <div class="row mb-1">
                                            <div for="price_range" class="col-md-3 col-form-label">PRICE RANGE</div>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-sm"
                                                    aria-label="Default select example" v-model="hotelTypes.price_range">
                                                    <option value="" selected hidden> Luxury </option>
                                                    <option value="1" class="text-dark">Budget: Rs.40,000 - 80,000 per day
                                                    </option>
                                                    <option value="2" class="text-warning">Standard: Rs.100,000 - 300,000
                                                        per day</option>
                                                    <option value="3" class="text-success">Luxury: Rs.300,000 - 500,000 per
                                                        day</option>
                                                </select>
                                            </div>
                                            <!-- <small id="msg_" class="text-danger form-text text-error-msg error"></small> -->
                                        </div>
                                        <div class="row mb-1">
                                            <div for="max_occupancy" class="col-md-3 col-form-label">MAX OCCUPANCY</div>
                                            <div class="col-md-9">
                                                <input type="number" class="form-control form-control-sm" name="max_occupancy"
                                                    id="max_occupancy" placeholder="100-500" min="100" max="500"  step="50"
                                                    v-model="hotelTypes.max_occupancy" required />
                                            </div>
                                            <!-- <small id="msg_" class="text-danger form-text text-error-msg error"></small> -->
                                        </div>
                                        <div class="row mb-1">
                                            <div for="amenities" class="col-md-3 col-form-label">AMENITIES</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="amenities"
                                                    id="amenities" placeholder="Private beach, Golf course, Kids club"
                                                    v-model="hotelTypes.amenities" required />
                                            </div>
                                            <small id="msg_" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="extra" class="col-md-3 col-form-label">EXTRA</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="extra"
                                                    id="extra" placeholder="All-inclusive packages available"
                                                    v-model="hotelTypes.extra" required />
                                            </div>
                                            <small id="msg_" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="text-right mt-2">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-sm btn-round btn-outline-dark mb-0"
                                                    @click.prevent="restHotelTypeFields()">
                                                    <font-awesome-icon />
                                                    RESET
                                                </button>
                                                <button type="submit" class="btn btn-primary btn btn-sm btn-neutral"
                                                    @click.prevent="createHotelType()">
                                                    CREATE
                                                </button>
                                            </div>
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
import AppLayout from '@/Layouts/AppLayout.vue';
import axios from 'axios';
import { ref, onBeforeMount } from 'vue';

const selectedItems = ref([]);
const selectAll = ref(false);

const hotelTypes = ref({
    name: '',
    price_range: '',
    max_occupancy: '',
    amenities: '',
    extra: '', 
});

const hotelTypeData = ref([]);

const editHotelType = async (hotelId) => {
    window.location.href = route('hotelType.edit', hotelId);
}

const createHotelType = async () => {
    try {
        const response = await axios.post(route('hotelType.store'), hotelTypes.value);
        getHotelTypes();
        restHotelTypeFields();

    } catch (error) {
        console.log('Error:', error);
    }
}

const getHotelTypes = async () => {
    const response = await axios.get(route('hotelType.all'));
    hotelTypeData.value = response.data.hotel_types;
    console.log(hotelTypeData.value);
}

const deleteHotelType = async (id) => {
    try {
        const response = await axios.delete(route('hotelType.delete', id));
        getHotelTypes();
    } catch (error) {
        console.log('Error:', error);
    }
};

const restHotelTypeFields = () => {
    hotelTypes.value.name = '';
    hotelTypes.value.price_range = '';
    hotelTypes.value.max_occupancy = '';
    hotelTypes.value.amenities = '';
    hotelTypes.value.extra = '';
}

const deleteSelectedItems = async () => {

    console.log('for deleted',hotelTypeData.value);
const selectedIds = selectedItems.value.map(index => hotelTypeData.value[index].id);

try {
    const response = await axios.delete(route('hotelTypes.delete.selected'), { data: { ids: selectedIds } });

    if (response.data.success) {
        hotelTypeData.value = hotelTypeData.value.filter(item => !selectedIds.includes(item.id));
        selectedItems.value = [];
        selectAll.value = false;
    } else {
        console.error('Failed to delete items', response.data.message);
    }
} catch (error) {
    console.log('Error:', error);
}
}

const selectAllItems = () => {
if (selectAll.value) {
    selectedItems.value = hotelTypeData.value.map((_, index) => index);
} else {
    selectedItems.value = [];
}
}

onBeforeMount(getHotelTypes);
</script>

<style>
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