<template>
    <nav class="bg-white sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="mb-4 text-center sidenav-header">
                <Link class="navbar-brand text-primary">
                <img src="/img/logo/logoc.png" alt="iMake" class="home-logo mt-1" height="150">

                </Link>
            </div>
            <br>
            <div class="mt-1 navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse sidebar_menu" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="mb-3 navbar-nav">
                        <li class="nav-item">
                            <Link :href="route('dashboard')" class="nav-link active-preloader">
                            <font-awesome-icon icon="fa-solid fa-desktop" />
                            <span class="ml-2 nav-link-text font-weight-400">Dashboard</span>
                            </Link>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#materialMenu" data-toggle="collapse" aria-expanded="true">
                                <font-awesome-icon icon="fa-solid fa-folder-open" /><span class="ml-2">Types</span>
                            </a>
                            <ul class=" list-unstyled" id="materialMenu">
                                <li class="nav-item">
                                    <Link :href="route('roomType.index')" class="nav-link active-preloader">
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">Room Types</span>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link :href="route('hotelType.index')" class="nav-link active-preloader">
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">Hotel Types</span>
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item" v-if="can('read_vendor')"> -->
                        <Link :href="route('hotel.index')" class="nav-link active-preloader">
                        <font-awesome-icon icon="fa-solid fa-building-user" />
                        <span class="ml-2 nav-link-text font-weight-400">Hotels</span>
                        </Link>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
// import isArray from 'loadsh/isArray';
// import { library } from '@fortawesome/fontawesome-svg-core'
// import { onBeforeMount } from 'vue';
// import { faBook,faNoteSticky,faArrowUpRightFromSquare, faDice ,faGift, faMoneyBillTransfer, faFileInvoice, faBuildingUser, faBoxesStacked, faFilePen,faCartShopping, faUsers, faArrowRotateRight, faWarehouse, faCoins, faGlobe, faGear, faDesktop, faLayerGroup, faFolder, faInfinity, faFolderOpen, faTruckField, faChartSimple, faListCheck, faPenToSquare, faRightFromBracket, faPercent,faPeopleCarryBox } from '@fortawesome/free-solid-svg-icons'

const isActive = (route, path) => {
    if (Array.isArray(path)) {
        return path.includes(route);
    }
    return false;
}

</script>

<style></style>