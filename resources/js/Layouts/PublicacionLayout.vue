<script>
    export default {
        props: {
            titulo: {
                type: String,
                required: true,
            },
            precio: {
                type: String,
                required: true,
            },
            descripcion: {
                type: String,
                required: true,
            }
        },
    }
</script>

<template>
    <div class="col-span-1 grid p-2 pb-0 bg-[#252525] rounded-md">
        <img
            src="../Pages/img/iphone7.jpg"
            class="rounded-md aspect-square transition-all w-full object-cover"
            alt=""
        />
        <div
            class="text-left my-2 text-white font-bold overflow-ellipsis overflow-hidden whitespace-nowrap"
        >
            <div class="">
                <p class="">{{ titulo }}</p>
            </div>
            <div>
                <p class="">{{ precio }} Gs</p>
            </div>

            <div>
                <p class="font-thin text-sm my-2">Villarrica - Paraguay</p>
            </div>
        </div>
    </div>
</template>
