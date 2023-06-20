<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout></AuthenticatedLayout>

    <!--  <AuthenticatedLayout>

        <div class="grid grid-cols-12">
            <div class="col-span-4 h-full">a</div>
        </div>
    </AuthenticatedLayout> -->
</template>
