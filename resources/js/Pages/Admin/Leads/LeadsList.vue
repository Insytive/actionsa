<template>
  <div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <div>
        <jet-application-logo class="block h-12 w-auto" />
      </div>

      <div class="mt-8 text-2xl">Welcome to ActionSA</div>

      <div class="mt-6 text-gray-500">
        <table class="table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2">Name</th>
              <th class="px-4 py-2">Surname</th>
              <th class="px-4 py-2">ID Number</th>
              <th class="px-4 py-2">Address</th>
              <th class="px-4 py-2">Voting Station</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="lead in leads" :key="lead.id">
              <td class="border px-4 py-2">{{ lead.first_name }}</td>
              <td class="border px-4 py-2">{{ lead.last_name }}</td>
              <td class="border px-4 py-2">{{ lead.id_number }}</td>
              <td class="border px-4 py-2">{{ lead.address }}</td>
              <td class="border px-4 py-2">{{ lead.station_id }}</td>
              <td class="border px-4 py-2"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import JetApplicationLogo from "./../../../Jetstream/ApplicationLogo";

export default {
  components: {
    JetApplicationLogo,
  },
  props: ["leads"],
};
</script>
