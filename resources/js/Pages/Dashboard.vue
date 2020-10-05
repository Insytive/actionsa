<template>
    <app-layout>
        <template #header>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <inertia-link href="/add/supporter">
                    <button
                        class="add-user mt-4 dots-reverse hover:bg-green-700 text-white ml-2 font-bold py-2 px-4 float-right"
                    >
                        Add Supporter
                    </button>
                </inertia-link>

                <inertia-link href="/add/member">
                    <button
                        class="add-user mt-4 dots hover:bg-green-700 text-white font-bold py-2 px-4 float-right"
                    >
                        Add Member
                    </button>
                </inertia-link>
            </div>
        </template>

        <div class="py-12 mt-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <leads-list :leads="this.$props.leads" />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "./../Layouts/AppLayout";
import LeadsList from "./../Pages/Admin/Leads/LeadsList";

export default {
    components: {
        AppLayout,
        LeadsList
    },

    props: {
        leads: Array,
        user_id: Number
    }
};
</script>
