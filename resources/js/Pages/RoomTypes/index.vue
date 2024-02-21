<template>
    <AppLayout title="Room Types">
        <template #header>
            <div class="pb-6 header">
                <div class="container-fluid">
                    <div class="header-body row">
                        <div class="py-4 col-lg-8 align-items-center">
                            <h6 class="mb-0 h2 text-dark d-inline-block">Good Receive Note Management</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-block">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item">
                                        <Link href="/">
                                        <font-awesome-icon icon="fa-solid fa-house" color="#505050" />
                                        </Link>
                                    </li>
                                    <li class="breadcrumb-item active breadcrumb-text" aria-current="page">
                                        Hotel Type Management
                                    </li>
                                </ol>
                            </nav>
                        </div>
                       
                        <div class="py-4 text-right col-lg-4">
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#newGrnModal"
                                class="btn btn-sm btn-neutral float-end">
                                <font-awesome-icon icon="fa-solid fa-circle-plus" /> ADD NEW
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <template #content>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shadow card">
                        <div class="row my-3 mx-2">
                            <div class="col-md-2 column__left___padding column__right___padding">
                                <div for="to_date" class=" col-form-label">STATUS</div>
                                <select class="form-control form-control-sm">
                                    <option value=0 selected>All</option>
                                    <option value=1>Draft</option>
                                    <option value=2>Approved</option>
                                </select>
                            </div>
                            <div class="col-md-2 column__right___padding">
                                <div for="barcode" class=" col-form-label">CODE</div>
                                <input type="text" class="form-control form-control-sm" name="code" id="code"
                                    placeholder="Code" />
                            </div>
                            <div class="col-md-2 column__left___padding column__right___padding">
                                <div for="purchase_uom" class=" col-form-label">WAREHOUSE</div>

                            </div>
                            <div class="col-md-2 column__left___padding column__right___padding">
                                <div for="purchase_uom" class=" col-form-label">TYPE</div>

                            </div>
                            <div class="col-md-2  column__left___padding column__right___padding">
                                <div for="created_by" class=" col-form-label">EFF DATE</div>
                                <input type="date" class="form-control form-control-sm" name="name" id="name"
                                    v-model="search_date" placeholder="Date" @keyup="getSearch" />
                            </div>
                            <div class="col-md-1 mt-4 column__left___padding">
                                <a href="javascript:void(0)" @click.prevent="clearFilters"
                                    class="btn btn-sm btn-ash float-end mt-2 pt-2"> CLEAR
                                </a>
                            </div>
                            <div class="flex ml-auto mt-4 text-muted">
                                <div class="inline-block mt-2 mx-2">
                                    <select class="form-control form-control-sm per-page-entry">
                                        <option />
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-4 mt-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th :class="iconClassHead">#</th>
                                            <th :class="textClassHead">Name</th>
                                            <th :class="textClassHead">Price range</th>
                                            <th :class="textClassHead">Max Occupancy</th>
                                            <th :class="valueClassHead">Extra</th>
                                            <th :class="textClassHead">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

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
            <div class="modal fade" id="newGrnModal" data-backdrop="static" tabindex="-1" role="dialog"
                aria-labelledby="newGrnModal" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title font-weight-bolder text-info text-gradient" id="add_brandLabel">
                                New GRN Form
                            </h5>
                            <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">
                                    <font-awesome-icon icon="fa-solid fa-xmark" />
                                </span>
                            </button>
                        </div>
                        <div class="p-0 modal-body">
                            <div class="card-plain">
                                <div class="m-2 card-body">
                                    <form role="form text-left" enctype="multipart/form-data">
                                        <div class="mb-1 row">
                                            <div for="transaction_type_id" class="col-md-4 col-form-label">
                                                TRANSACTION TYPE
                                            </div>
                                            <div class="col-md-8">

                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <div for="warehouse_id" class="col-md-4 col-form-label">
                                                WAREHOUSE
                                            </div>
                                            <div class="col-md-8">
                                            </div>
                                        </div>
                                        <div class="mb-1 row">
                                            <div for="date" class="col-md-4 col-form-label">EFF DATE</div>
                                            <div class="col-md-8">
                                                <input type="date" class="form-control form-control-sm" name="date"
                                                    id="date"/>
                                                <small v id="msg_date"
                                                    class="text-danger form-text text-error-msg error">
                                                </small>
                                            </div>
                                        </div>
                                        <div class="mt-2 text-right">
                                            <button type="submit" class="mb-0 btn btn-round custom-button btn-sm"
                                                >
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
</style>
