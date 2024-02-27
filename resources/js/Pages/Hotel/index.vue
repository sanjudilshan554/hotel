<template>
    <AppLayout title="Hotels">
        <template #header>
            <div class="header  pb-6">
                <div class="container-fluid ">
                    <div class="header-body ">
                        <div class="row align-items-center mb-1 ">
                            <div class="col-lg-8 mt-5">
                                <h6 class="h2 text-dark d-inline-block mb-0 mt-4">Hotels</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-block">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <i class="fas fa-home"></i>
                                        </li>
                                        <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                            Hotels Mangement
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-right py-1">
                        <button type="button" class="btn btn-primary btn btn-sm btn-neutral float-end" data-toggle="modal"
                            data-target="#exampleModal">
                            <font-awesome-icon icon="fa-solid fa-circle-plus" /> ADD NEW
                        </button>
                    </div>
                </div>
            </div>
        </template>

        <template #content>
            <div class="row ">
                <div class="col-lg-12 mt-3">
                    <div class="card shadow">
                        <div class="row my-3 mx-2">
                            <div class="col-md-2 column__right___padding column__left___padding">
                                <div for="purchase_uom" class="col-form-label">NAME</div>
                                <input type="text" class="form-control form-control-sm" name="name" id="name"
                                    placeholder="Mount Lavania" />
                            </div>
                            <div class="col-md-2 column__right___padding column__left___padding">
                                <div for="purchase_uom" class="col-form-label">CATEGORY</div>
                                <input type="text" class="form-control form-control-sm" name="contact" id="contact"
                                    placeholder="Luxury" />
                            </div>
                            <div class="col-md-2 mt-4 column__left___padding">
                                <a href="javascript:void(0)" class="btn btn-sm btn-ash float-end mt-2 pt-2">
                                    CLEAR
                                </a>
                            </div>
                            <div class="text-muted ml-auto mx-4 mt-4">
                                <div class="inline-block">

                                </div>
                            </div>
                        </div>

                        <div class="row mx-4">
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
                                            <th class="textClassHead">City</th>
                                            <th class="textClassHead">Contact</th>
                                            <th class="textClassHead">Address</th>
                                            <th class="textClassHead">Hotel Type</th>
                                            <th class="textClassHead"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="value, index in hotelsData" :key="index">
                                            <td class="checkArea">
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox" :value="index"
                                                        v-model="selectedItems" />
                                                </div>
                                            </td>
                                            <td class="iconClassBody pt-2">
                                                {{ value.name }}
                                            </td>
                                            <td class="textClassBody">
                                                {{ value.city }}
                                            </td>
                                            <td class="textClassBody">
                                                {{ value.contact_1 }}
                                            </td>
                                            <td class="textClassBody">
                                                {{ value.address }}
                                            </td>
                                            <td class="textClassBody">
                                                {{ value.hotel_type?.name }}
                                            </td>
                                            <td class="textClassBody">
                                                <div class="">
                                                    <a href="javascript:void(0)" class="edit"
                                                        @click.prevent="editHotelType(value.id)"> <i
                                                            class="fas fa-edit"></i></a>
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
                                New Hotel
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
                                    <form role="form text-left" enctype="multipart/form-data">
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">NAME</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="name"
                                                    id="name" placeholder="Mount Lavania" v-model="hotel.name" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="name" class="col-md-3 col-form-label">TYPE</div>
                                            <div class="col-md-9">
                                                <select class="form-control form-control-sm"
                                                    aria-label="Default select example" v-model="hotel.hotel_type_id"
                                                    required>
                                                    <option value="" disabled selected>Select a type</option>
                                                    <option v-for="value in hotelTypes" :value="value.id"> {{ value.name }}
                                                    </option>
                                                </select>
                                            </div>
                                            <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="name" class="col-md-3 col-form-label">CITY</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="city"
                                                    id="city" placeholder="Embilipitiya" v-model="hotel.city" required />
                                            </div>
                                            <small id="msg_name" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="text-right mt-2">
                                            <button type="submit" class="btn btn-round custom-button btn-sm mb-0"
                                                @click.prevent="createHotel()">
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
import Swal from 'sweetalert2';

const hotel = ref({
    name: '',
    hotel_type_id: '',
    city: '',
});

const hotelTypes = ref([]);
const hotelsData = ref([]);
const selectedItems = ref([]);
const selectAll = ref(false);

const getHotelTypes = async () => {
    try {
        const response = await axios.get(route('hotelType.all'));
        hotelTypes.value = response.data.hotel_types;
    } catch (error) {
        console.log('Error:', error);
    }
}

const createHotel = async (id) => {
    try {
        const response = await axios.post(route('hotels.store'), hotel.value);
        const hotelId = response.data.id;
        await Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        }).then(() => {
            window.location.href = route('hotels.edit', hotelId);
        });
    } catch (error) {
        console.log('Error:', error);
    }
}

const getHotelData = async () => {
    try {
        const response = await axios.get(route('hotel.all'));
        hotelsData.value = response.data.hotels;
        console.log('hotels data', hotelsData.value);
    } catch (error) {
        console.log('Error', error);
    }
}


const deleteSelectedItems = async () => {

    const selectedIds = selectedItems.value.map(index => hotelsData.value[index].id);

    try {
        const response = await axios.delete(route('hotels.delete.selected'), { data: { ids: selectedIds } });

        if (response.data.success) {
            hotelsData.value = hotelsData.value.filter(item => !selectedIds.includes(item.id));
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
        selectedItems.value = hotelsData.value.map((_, index) => index);
    } else {
        selectedItems.value = [];
    }
}

const editHotelType = (id) => {

    window.location.href = route('hotels.edit', id);

}

onMounted(() => {
    getHotelTypes();
    getHotelData();
});

</script>

<style>
.edit {
    color: blue;
}
</style>