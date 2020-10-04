<template>
    <app-layout>
        <template #header> </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <member />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";
import Member from "../Components/Registration/Member";

export default {
    components: {
        AppLayout,
        Member
    },

    props: {
        leads: Array,
        msg: String
    }
};
</script>
