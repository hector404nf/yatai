<script>
import PublicacionLayout from "./PublicacionLayout.vue";

import { onMounted } from "vue";
import usePublicacion from "./Recursos/usePublicacion";
export default {
    components: {
        PublicacionLayout,
    },
    setup() {
        const { getPublicaciones, publicacion, publicaciones } =
            usePublicacion();

        onMounted(() => {
            getPublicaciones();
            console.log(publicaciones);
        });

        return {
            publicaciones,
        }
    },
};
</script>

<template>
    <div class="bg-[#18191a] grid mt-16 col-span-6 content-start text-center">
        <div
            class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-2 p-2 h-full w-full"
        >
            <div class="flex mt-2 col-span-4">
                <p class="font-bold text-2xl ml-1 text-gray-100">Recientes</p>
            </div>
            <div class="grid grid-cols-4 gap-2 col-span-4" >
                <div v-for="(publi, index) in publicaciones" :key="index.id_publicaciones">
                    <PublicacionLayout :titulo="publi.titulo" :precio="publi.precio" :descripcion="publi.descripcion" />
                </div>
            </div>

            <div class="col-span-4 bg-gray-300 h-[1px] mt-10"></div>

            <!-- Empiezan las categorias -->
            <div class="flex mt-2 col-span-4 justify-between">
                <p class="font-bold text-2xl ml-1 text-gray-100">
                    Celulares y Accesorios
                </p>
                <div class="flex items-center text-center justify-center gap-4">
                    <a href="#" class="font-normal text-1xl text-blue-500"
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
                            <p class="">Oferta Xioami 11 Lite de 128GB</p>
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
                                14promax en caja nuevo al 100% full para toda
                                las operadoras 💥
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
                <p class="font-bold text-2xl ml-1 text-gray-100">Electronica</p>
                <div class="flex items-center text-center justify-center gap-4">
                    <a href="#" class="font-normal text-1xl text-blue-500"
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
</template>
