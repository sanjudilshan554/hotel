<template>
    <AppLayout>
        <template #header>
            <div class="header  pb-6">
                <div class="container-fluid ">
                    <div class="header-body ">
                        <div class="row align-items-center mb-1 ">
                            <div class="col-lg-8 mt-5">
                                <h6 class="h2 text-dark d-inline-block mb-0 mt-5">Hotel Types</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-block">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                        <li class="breadcrumb-item">
                                            <Link href="/">
                                            <font-awesome-icon icon="fa-solid fa-house" color="#505050" />
                                            </Link>
                                        </li>
                                        <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                            Hotel Types
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
                                        <div class="p-2 border icon_item">
                                            <a href="javascript:void(0)">
                                                <i class="fa-solid fa-trash-can icon_item-icon" color="#505050"></i>
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
                                                    <input class="form-check-input" type="checkbox" />
                                                </div>
                                            </th>
                                            <th class="iconClassHead">#</th>
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
                                        <tr>
                                            <td class="checkArea">
                                                <div class="form-check mb-4">
                                                    <input class="form-check-input" type="checkbox" />
                                                </div>
                                            </td>
                                            <td class="iconClassBody pt-2">

                                            </td>
                                            <td class="textClassBody">

                                            </td>
                                            <td class="textClassBody">

                                            </td>
                                            <td class="textClassBody">

                                            </td>
                                            <td class="textClassBody">

                                            </td>
                                            <td class="textClassBody">

                                            </td>
                                            <td class="textClassBody">
                                                <a href="javascript:void(0)">
                                                    <font-awesome-icon icon="fa-solid fa-pen" class="text-ash" />
                                                </a>
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
                                    <form role="form text-left" enctype="multipart/form-data">
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">NAME</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="code" placeholder="Luxury" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">PRICE RANGE</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="code" placeholder="Code" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">MAX OCCUPANCY</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="100-500" placeholder="100-400" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">AMENITIES</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="code" placeholder="Private beach, Golf course, Kids club" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="row mb-1">
                                            <div for="code" class="col-md-3 col-form-label">EXTRA</div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control form-control-sm" name="code"
                                                    id="code" placeholder="All-inclusive packages available" required />
                                            </div>
                                            <small id="msg_code" class="text-danger form-text text-error-msg error"></small>
                                        </div>
                                        <div class="text-right mt-2" >
                                            <button type="submit" class="btn btn-round custom-button btn-sm mb-0">
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
</script>
