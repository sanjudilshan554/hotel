<template>
    <AppLayout title="Vendor - Edit">
        <template #header>
            <div class="pb-6 header">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="py-4 row align-items-center">
                            <div class="col-lg-6 mt-5">
                                <h6 class="mb-0 h2 text-dark d-inline-block">
                                    Hotel
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
                                    Hotels Data</a>
                            </li>
                            <li class="mb-2 nav-item">
                                <a class="nav-link" id="contact-book-tab" data-toggle="tab" href="#contact-book" role="tab"
                                    aria-controls="contact-book" aria-selected="true">
                                    Hotel Images</a>
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
                                    <BasicEditForm />
                                </div>
                                <div class="tab-pane fade show" id="contact-book" role="tabpanel">
                                    <HotelImagesAll />
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

import BasicEditForm from '@/Pages/Hotel/Components/Basic/EditForm.vue';
import HotelImagesAll from '@/Pages/Hotel/Components/HotelImages/All.vue';

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
