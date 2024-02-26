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
                <div class="collapse navbar-collapse show sidebar_menu" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="mb-3 navbar-nav">
                        <li class="nav-item" >
                            <Link   :class="{ 'active': route().current() == 'dashboard' }" 
                                    :href="route('dashboard')" class="nav-link active-preloader">
                            <i class="fa-solid fa-gauge"></i>
                            <span class="nav-link-text font-weight-400">Dashboard</span>
                            </Link>
                        </li>

                        <li class="nav-item show">
                            <a class="nav-link" href="#materialMenu" data-toggle="collapse" aria-expanded="true">
                                <i class="fa-solid fa-sitemap"></i><span class="ml-2">Types</span>
                            </a>
                            <ul class=" list-unstyled collapse" id="materialMenu">
                                <li class="nav-item">
                                    <Link :class="{'active': $page.url.startsWith('/room-type')}"
                                        :href="route('roomType.index')" class="nav-link active-preloader">
                                        <i class="fa-solid fa-shower ml-4"></i>
                                    <span class="ml-2 hide-menu">Room Types</span>
                                    </Link>
                                </li>
                                <li class="nav-item ">
                                    <Link :class = "{ 'active' : $page.url.startsWith('/hotel-types')}"
                                        :href="route('hotelType.index')" class="nav-link active-preloader">
                                       <i class="fa-solid fa-bell-concierge ml-4"></i>
                                    <span class="ml-2 hide-menu">Hotel Types</span>
                                    </Link>
                                </li>
                            </ul>
                        </li>
                        <Link :class = "{ 'active' : $page.url.startsWith('/hotel')}"
                            :href="route('hotel.index')" class="nav-link active-preloader">
                            <i class="fa-solid fa-hotel"></i>
                        <span class="ml-2 nav-link-text font-weight-400">Hotels</span>
                        </Link>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3';

const isActive = (route, path) => {
    if(isArray(path)){
        return path.includes(route);
    }
}
</script>

<style>
.side-bar-icon{
    color: rgb(0, 0, 0);
}

</style>