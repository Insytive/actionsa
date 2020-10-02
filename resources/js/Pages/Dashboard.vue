<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>

      <inertia-link href="/add-lead">
        <button
          class="dots hover:bg-green-700 text-white font-bold py-2 px-4 float-right"
        >
          Add New Lead
        </button>
      </inertia-link>
    </template>

    <div class="py-12">
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
    LeadsList,
  },

  props: {
    leads: Array,
    user_id: Number,
  },
};
</script>
