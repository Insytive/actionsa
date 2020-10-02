<template>
    <web-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Registration Error!
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1>That ID already exists.</h1>
                </div>
            </div>
        </div>
    </web-layout>
</template>

<script>

import WebLayout from "../Layouts/WebLayout";

export default {
    components: {
        WebLayout,
    },
}
</script>
