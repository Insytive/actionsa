<template>
    <app-layout>
        <template #header> </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <supporter />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";
import Supporter from "../Components/Registration/Supporter";

export default {
    components: {
        AppLayout,
        Supporter
    },

    props: {
        leads: Array,
        msg: String
    }
};
</script>
