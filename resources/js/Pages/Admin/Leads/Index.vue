<template>
  <admin-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <leads-list />
        </div>
      </div>
    </div>
  </admin-layout>
</template>

<script>
import AdminLayout from "./../../../Layouts/AdminLayout";
import LeadsList from "./LeadsList";

export default {
  components: {
    AdminLayout,
    LeadsList,
  },
};
</script>
