<template>
    <web-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Become a Member
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <member />
                </div>


            </div>
        </div>
    </web-layout>
</template>

<script>

import WebLayout from "../Layouts/WebLayout";
import Member from "../Components/Registration/Member";

export default {
    components: {
        WebLayout,
        Member
    },
}
</script>
