<template>
    <web-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Become a Supporter
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <supporter />
                </div>
            </div>
        </div>
    </web-layout>
</template>

<script>

import WebLayout from "../Layouts/WebLayout";
import Supporter from "../Components/Registration/Supporter";

export default {
    components: {
        WebLayout,
        Supporter
    },
}
</script>
