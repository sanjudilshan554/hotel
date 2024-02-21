<template>
    <nav class="bg-white sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="mb-4 text-center sidenav-header">
                <Link class="navbar-brand text-primary" >
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
                            <Link :href="route('dashboard')"
                                class="nav-link active-preloader" >
                            <font-awesome-icon icon="fa-solid fa-desktop" />
                            <span class="ml-2 nav-link-text font-weight-400">Dashboard</span>
                            </Link>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#materialMenu" data-toggle="collapse" aria-expanded="true">
                                <font-awesome-icon icon="fa-solid fa-folder-open" /><span class="ml-2">Material</span>
                            </a>
                            <ul 
                                class=" list-unstyled" id="materialMenu">
                                <li class="nav-item">
                                    <Link 
                                        class="nav-link active-preloader" >
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">All</span>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link
                                        class="nav-link active-preloader"
                                        >
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" />
                                    <span class="ml-2 hide-menu">hh</span>
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item" v-if="can('read_vendor')"> -->
                            <Link class="nav-link active-preloader"
                               >
                            <font-awesome-icon icon="fa-solid fa-building-user" />
                            <span class="ml-2 nav-link-text font-weight-400">Vendor</span>
                            </Link>
                        <!-- </li> -->
                        <!-- <li class="nav-item" v-if="can('read_grns')"> -->
                            <Link  class="nav-link active-preloader"
                              >
                            <font-awesome-icon icon="fa-solid fa-people-carry-box" />
                            <span class="ml-2 nav-link-text font-weight-400">GRN</span>
                            </Link>
                            <!-- </li> -->
                         <li class="nav-item">
                            <Link  class="nav-link active-preloader"
                              >
                              <font-awesome-icon icon="fa-solid fa-users" />
                            <span class="ml-2 nav-link-text font-weight-400">customer </span>
                            </Link>
                           </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#settingsMenu" data-toggle="collapse" aria-expanded="true">
                                <font-awesome-icon icon="fa-solid fa-gear" /><span class="ml-2">Settings</span>
                            </a>
                            <ul 
                                class=" list-unstyled" id="settingsMenu">
                                <li class="nav-item">
                                    <Link 
                                        class="nav-link active-preloader" >
                                    <font-awesome-icon icon="fa-solid fa-layer-group " class="ml-4" /><span
                                        class="ml-2 hide-menu">Material Types</span>
                                    </Link>
                                </li>
                                <li class="nav-item" >
                                    <Link 
                                        class="nav-link active-preloader" >
                                    <font-awesome-icon icon="fa-solid fa-folder " class="ml-4" /><span
                                        class="ml-2 hide-menu">Material Categories</span>
                                    </Link>
                                </li>
                                <li class="nav-item">
                                    <Link
                                        class="nav-link active-preloader" >
                                    <font-awesome-icon icon="fa-solid fa-infinity" class="ml-4" /><span
                                        class="ml-2 hide-menu">Unit Of Measurements</span>
                                    </Link>
                                </li>
                            </ul>
                        </li>
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
    if(Array.isArray(path)){
        return path.includes(route);
    }
    return false;
}

</script>

<style>

</style>