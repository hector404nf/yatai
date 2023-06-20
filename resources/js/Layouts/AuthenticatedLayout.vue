<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="relative">
        <nav class="z-10 bg-[#242526] fixed w-full border-b border-[#a5a1a1]">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-[#242526]">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <Link :href="route('dashboard')">
                                <!-- <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800"
                                    /> -->
                                <!--  <img src="../Pages/img/logoblanco.png" alt="" class="w-16"> -->
                                <!-- <img src="../Pages/img/logonegro.png" alt="" class="w-16"> -->
                                <img
                                    src="../Pages/img/logonaranja.png"
                                    alt=""
                                    class="w-16"
                                />
                            </Link>
                        </div>

                        <!-- Navigation Links -->
                        <!-- <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                                    Dashboard
                                </NavLink>
                            </div> -->
                    </div>

                    <div class="flex justify-center items-center">
                        <div
                            class="flex w-full bg-white rounded-lg items-center justify-around"
                        >
                            <input
                                type="search"
                                class="h-10 bg-transparent border-none outline-none focus:ring-0 focus:border-none"
                                placeholder="Realiza tu busqueda..."
                            />
                            <svg
                                class="mr-3"
                                width="20px"
                                height="20px"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M10 5C7.23858 5 5 7.23858 5 10C5 12.7614 7.23858 15 10 15C11.381 15 12.6296 14.4415 13.5355 13.5355C14.4415 12.6296 15 11.381 15 10C15 7.23858 12.7614 5 10 5ZM3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10C17 11.5719 16.481 13.0239 15.6063 14.1921L20.7071 19.2929C21.0976 19.6834 21.0976 20.3166 20.7071 20.7071C20.3166 21.0976 19.6834 21.0976 19.2929 20.7071L14.1921 15.6063C13.0239 16.481 11.5719 17 10 17C6.13401 17 3 13.866 3 10Z"
                                    fill="#f97316ff"
                                />
                            </svg>
                        </div>
                    </div>

                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <!-- Settings Dropdown -->
                        <div class="ml-3 relative">
                            <Dropdown align="right" width="48">
                                <template #trigger>
                                    <span class="inline-flex rounded-md gap-3">
                                        <button
                                            type="button"
                                            class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-orange-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                        >
                                            <div
                                                class="w-12 h-12 rounded-full bg-[#3a3b3c] flex justify-center items-center"
                                            >
                                                <svg
                                                    fill="#f97316ff"
                                                    width="20px"
                                                    height="20px"
                                                    viewBox="0 0 16 16"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M14.12 4 8.62.85a1.28 1.28 0 0 0-1.24 0L1.88 4a1.25 1.25 0 0 0-.63 1.09V11a1.25 1.25 0 0 0 .63 1l5.5 3.11a1.28 1.28 0 0 0 1.24 0l5.5-3.11a1.25 1.25 0 0 0 .63-1V5.05A1.25 1.25 0 0 0 14.12 4zm-6.74 9.71-2.13-1.2v-5.3l2.13 1.16zM8 7.29 5.92 6.15l4.81-2.67 2.09 1.18zm0-5.35 1.46.82-4.84 2.69-1.44-.79zM2.5 5.71l1.5.82v5.27L2.5 11zm6.12 8V8.37l4.88-2.66V11z"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                        <button
                                            type="button"
                                            class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-orange-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                        >
                                            <div
                                                class="w-12 h-12 rounded-full bg-[#3a3b3c] flex justify-center items-center"
                                            >
                                                <svg
                                                    width="20px"
                                                    height="20px"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        d="M15.5 11.5H15.51M11.5 11.5H11.51M7.5 11.5H7.51M18 20L21 21L19.1 15.3C19.1 15.3 20 14 20 11.5C20 8.90308 18.8354 6.57817 17 5.01903M11.5 3C6.80558 3 3 6.80558 3 11.5C3 16.1944 6.80558 20 11.5 20C14.0847 20 15.3 19.1 15.3 19.1"
                                                        stroke="#f97316ff"
                                                        stroke-width="1.5"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                    />
                                                </svg>
                                            </div>
                                        </button>
                                        <button
                                            type="button"
                                            class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-orange-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                        >
                                            <div
                                                class="w-12 h-12 rounded-full bg-[#3a3b3c] flex justify-center items-center"
                                            >
                                                <svg
                                                    fill="#f97316ff"
                                                    height="20px"
                                                    width="20px"
                                                    version="1.2"
                                                    baseProfile="tiny"
                                                    id="Layer_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    viewBox="0 0 448 512"
                                                    xml:space="preserve"
                                                >
                                                    <g>
                                                        <path
                                                            d="M222.987,510c31.418,0,57.529-22.646,62.949-52.5H160.038C165.458,487.354,191.569,510,222.987,510z"
                                                        />
                                                        <path
                                                            d="M432.871,352.059c-22.25-22.25-49.884-32.941-49.884-141.059c0-79.394-57.831-145.269-133.663-157.83h-4.141
		c4.833-5.322,7.779-12.389,7.779-20.145c0-16.555-13.42-29.975-29.975-29.975s-29.975,13.42-29.975,29.975
		c0,7.755,2.946,14.823,7.779,20.145h-4.141C120.818,65.731,62.987,131.606,62.987,211c0,108.118-27.643,118.809-49.893,141.059
		C-17.055,382.208,4.312,434,47.035,434H398.93C441.568,434,463.081,382.269,432.871,352.059z"
                                                        />
                                                    </g>
                                                </svg>
                                            </div>
                                        </button>
                                        <button
                                            type="button"
                                            class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-orange-500 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                        >
                                            <!-- {{ $page.props.auth.user.name }} -->
                                            <img
                                                src="../Pages/img/fotoperfil.jpg"
                                                class="w-12 rounded-full"
                                                alt=""
                                            />

                                            <svg
                                                class="ml-2 -mr-0.5 h-4 w-4"
                                                xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20"
                                                fill="currentColor"
                                            >
                                                <path
                                                    fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"
                                                />
                                            </svg>
                                        </button>
                                    </span>
                                </template>

                                <template #content>
                                    <DropdownLink :href="route('profile.edit')">
                                        Profile
                                    </DropdownLink>
                                    <DropdownLink
                                        :href="route('logout')"
                                        method="post"
                                        as="button"
                                    >
                                        Log Out
                                    </DropdownLink>
                                </template>
                            </Dropdown>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button
                            @click="
                                showingNavigationDropdown =
                                    !showingNavigationDropdown
                            "
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                        >
                            <svg
                                class="h-6 w-6"
                                stroke="currentColor"
                                fill="none"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    :class="{
                                        hidden: showingNavigationDropdown,
                                        'inline-flex':
                                            !showingNavigationDropdown,
                                    }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                                <path
                                    :class="{
                                        hidden: !showingNavigationDropdown,
                                        'inline-flex':
                                            showingNavigationDropdown,
                                    }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div
                :class="{
                    block: showingNavigationDropdown,
                    hidden: !showingNavigationDropdown,
                }"
                class="sm:hidden"
            >
                <div class="pt-2 pb-3 space-y-1">
                    <ResponsiveNavLink
                        :href="route('dashboard')"
                        :active="route().current('dashboard')"
                    >
                        Dashboard
                    </ResponsiveNavLink>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">
                            {{ $page.props.auth.user.name }}
                        </div>
                        <div class="font-medium text-sm text-gray-500">
                            {{ $page.props.auth.user.email }}
                        </div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <ResponsiveNavLink :href="route('profile.edit')">
                            Profile
                        </ResponsiveNavLink>
                        <ResponsiveNavLink
                            :href="route('logout')"
                            method="post"
                            as="button"
                        >
                            Log Out
                        </ResponsiveNavLink>
                    </div>
                </div>
            </div>
        </nav>

        <!-- <header class="bg-white shadow" v-if="$slots.header">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header" />
            </div>
        </header> -->

        <div class="bg-red-500 h-[calc(100vh-65px)] grid grid-cols-8">
            <!-- Page Content -->
            <div
                class="col-span-2 grid grid-cols-2 border-r border-[#a5a1a1] bg-[#242526]"
            >
                <!-- <div class="h-screen fixed top-16 bg-gray-500 left-0 right-0" style="width: calc(27% - 2rem);">
                    Barra Lateral
                </div> -->
                <div
                    class="fixed top-16 w-[25vw] overflow-y-auto"
                >
                    <div class="h-screen">Barra Lateral</div>
                </div>
            </div>
            <div
                class="bg-[#18191a] grid mt-16 col-span-6 content-start text-center"
            >
                <div
                    class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2 p-2 h-full w-full"
                >
                    <div class="flex mt-2 col-span-4">
                        <p class="font-bold text-2xl ml-1 text-gray-100">
                            Recientes
                        </p>
                    </div>
                    <div class="grid gap-2 grid-flow-col col-span-4">
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/iphone7.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">Iphone 7</p>
                                </div>
                                <div>
                                    <p class="">800.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/macbook.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">MACBOOK PRO 16GB</p>
                                </div>
                                <div>
                                    <p class="">3.900.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/campera.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden"
                            >
                                <div class="">
                                    <p class="">
                                        Campera de kimetsu no yaiba ( tanjiro
                                        Kamado ) UNISEX M , G , GG
                                    </p>
                                </div>
                                <div>
                                    <p class="">170.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/nissan.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">Vendo Nissan Tiida 2006</p>
                                </div>
                                <div>
                                    <p class="">16.000.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-4 bg-gray-300 h-[1px] mt-10"></div>

                    <!-- Empiezan las categorias -->
                    <div class="flex mt-2 col-span-4 justify-between">
                        <p class="font-bold text-2xl ml-1 text-gray-100">
                            Celulares y Accesorios
                        </p>
                        <div
                            class="flex items-center text-center justify-center gap-4"
                        >
                            <a
                                href="#"
                                class="font-normal text-1xl text-blue-500"
                                >Ver mas</a
                            >
                            <button>
                                <svg
                                    fill="#fff"
                                    width="24px"
                                    height="24px"
                                    viewBox="0 0 32 32"
                                    class="mr-2"
                                    enable-background="new 0 0 32 32"
                                    id="Glyph"
                                    version="1.1"
                                    xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <path
                                        d="M16,13c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S17.654,13,16,13z"
                                        id="XMLID_287_"
                                    />
                                    <path
                                        d="M6,13c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S7.654,13,6,13z"
                                        id="XMLID_289_"
                                    />
                                    <path
                                        d="M26,13c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S27.654,13,26,13z"
                                        id="XMLID_291_"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="grid gap-2 grid-flow-col col-span-4">
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/celulares/xiaomi11.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">
                                        Oferta Xioami 11 Lite de 128GB
                                    </p>
                                </div>
                                <div>
                                    <p class="">700.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/celulares/blackshark.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">Xiaomi Blackshark 5</p>
                                </div>
                                <div>
                                    <p class="">5.000.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/celulares/14promax.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden"
                            >
                                <div class="">
                                    <p class="">
                                        14promax en caja nuevo al 100% full para
                                        toda las operadoras 💥
                                    </p>
                                </div>
                                <div>
                                    <p class="">7.500.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/celulares/xiaomi13.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">XIAOMI 13 12/256 GB a Cuotas</p>
                                </div>
                                <div>
                                    <p class="">450.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-span-4 bg-gray-300 h-[1px] mt-10"></div>

                    <div class="flex mt-2 col-span-4 justify-between">
                        <p class="font-bold text-2xl ml-1 text-gray-100">
                            Electronica
                        </p>
                        <div
                            class="flex items-center text-center justify-center gap-4"
                        >
                            <a
                                href="#"
                                class="font-normal text-1xl text-blue-500"
                                >Ver mas</a
                            >
                            <button>
                                <svg
                                    fill="#fff"
                                    width="24px"
                                    height="24px"
                                    viewBox="0 0 32 32"
                                    class="mr-2"
                                    enable-background="new 0 0 32 32"
                                    id="Glyph"
                                    version="1.1"
                                    xml:space="preserve"
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <path
                                        d="M16,13c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S17.654,13,16,13z"
                                        id="XMLID_287_"
                                    />
                                    <path
                                        d="M6,13c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S7.654,13,6,13z"
                                        id="XMLID_289_"
                                    />
                                    <path
                                        d="M26,13c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3S27.654,13,26,13z"
                                        id="XMLID_291_"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="grid gap-2 grid-flow-col col-span-4">
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/electronica/nintendoswitch.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">Nintendo Switch Lite</p>
                                </div>
                                <div>
                                    <p class="">1.000.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/electronica/proyector.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">Mini Proyector</p>
                                </div>
                                <div>
                                    <p class="">370.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/electronica/rasberry.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden"
                            >
                                <div class="">
                                    <p class="">Vendo Raspberry Pi 3</p>
                                </div>
                                <div>
                                    <p class="">210.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="grid p-2 pb-0 bg-[#252525] rounded-md">
                            <img
                                src="../Pages/img/electronica/tvxiaomi.jpg"
                                class="rounded-md aspect-square transition-all w-full object-cover"
                                alt=""
                            />
                            <div
                                class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
                            >
                                <div class="">
                                    <p class="">Tv Xiaomi 55" smart Qled</p>
                                </div>
                                <div>
                                    <p class="">3.600.000 Gs</p>
                                </div>
                                <div>
                                    <p class="font-thin text-sm my-2">
                                        Villarrica - Paraguay
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
