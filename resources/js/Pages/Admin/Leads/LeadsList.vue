  <style>
/*Overrides for Tailwind CSS */

/*Form fields*/
.dataTables_wrapper select,
.dataTables_wrapper .dataTables_filter input {
  color: #4a5568; /*text-gray-700*/
  padding-left: 1rem; /*pl-4*/
  padding-right: 1rem; /*pl-4*/
  padding-top: 0.5rem; /*pl-2*/
  padding-bottom: 0.5rem; /*pl-2*/
  line-height: 1.25; /*leading-tight*/
  border-width: 2px; /*border-2*/
  border-radius: 0.25rem;
  border-color: #edf2f7; /*border-gray-200*/
  background-color: #edf2f7; /*bg-gray-200*/
}

/*Row Hover*/
table.dataTable.hover tbody tr:hover,
table.dataTable.display tbody tr:hover {
  background-color: #ebf4ff; /*bg-indigo-100*/
}

/*Pagination Buttons*/
.dataTables_wrapper .dataTables_paginate .paginate_button {
  font-weight: 700; /*font-bold*/
  border-radius: 0.25rem; /*rounded*/
  border: 1px solid transparent; /*border border-transparent*/
}

/*Pagination Buttons - Current selected */
.dataTables_wrapper .dataTables_paginate .paginate_button.current {
  color: #fff !important; /*text-white*/
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); /*shadow*/
  font-weight: 700; /*font-bold*/
  border-radius: 0.25rem; /*rounded*/
  background: #667eea !important; /*bg-indigo-500*/
  border: 1px solid transparent; /*border border-transparent*/
}

/*Pagination Buttons - Hover */
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
  color: #fff !important; /*text-white*/
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); /*shadow*/
  font-weight: 700; /*font-bold*/
  border-radius: 0.25rem; /*rounded*/
  background: #667eea !important; /*bg-indigo-500*/
  border: 1px solid transparent; /*border border-transparent*/
}

/*Add padding to bottom border */
table.dataTable.no-footer {
  border-bottom: 1px solid #e2e8f0; /*border-b-1 border-gray-300*/
  margin-top: 0.75em;
  margin-bottom: 0.75em;
}

/*Change colour of responsive icon*/
table.dataTable.dtr-inline.collapsed > tbody > tr > td:first-child:before,
table.dataTable.dtr-inline.collapsed > tbody > tr > th:first-child:before {
  background-color: #667eea !important; /*bg-indigo-500*/
}
</style>




<template>
  <div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <!-- <div>
        <jet-application-logo class="block h-12 w-auto" />
      </div>

      <div class="mt-8 text-2xl">Welcome to ActionSA</div> -->

      <div class="mt-6 text-gray-500">
        <div class="container w-full px-2">
          <table
            id="example"
            class="stripe hover"
            style="width: 100%; padding-top: 1em; padding-bottom: 1em"
          >
            <thead>
              <tr>
                <th data-priority="1">Name</th>
                <th data-priority="2">Surname</th>
                <th data-priority="3">ID Number</th>
                <th data-priority="4">Address</th>
                <th data-priority="5">Phone</th>
                <th data-priority="6">Voting Station</th>
                <th data-priority="7"></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="lead in leads" :key="lead.id">
                <td class="border px-4 py-2">{{ lead.first_name }}</td>
                <td class="border px-4 py-2">{{ lead.last_name }}</td>
                <td class="border px-4 py-2">{{ lead.id_number }}</td>
                <td class="border px-4 py-2">{{ lead.address }}</td>
                <td class="border px-4 py-2">{{ lead.phone }}</td>
                <td class="border px-4 py-2">{{ lead.station_id }}</td>
                <td class="border px-4 py-2">
                  <span class="svg__icon">
                    <svg class="icon icon-chevron-small-right">
                      <use xlink:href="#icon-chevron-small-right"></use>
                      <symbol id="icon-chevron-small-right" viewBox="0 0 20 20">
                        <path
                          d="M11 10l-3.141-3.42c-0.268-0.27-0.268-0.707 0-0.978 0.268-0.27 0.701-0.27 0.969 0l3.83 3.908c0.268 0.271 0.268 0.709 0 0.979l-3.83 3.908c-0.267 0.272-0.701 0.27-0.969 0s-0.268-0.707 0-0.978l3.141-3.419z"
                        ></path>
                      </symbol>
                    </svg>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--/container-->
      </div>
    </div>
  </div>
</template>




<script>
$(document).ready(function () {
  var table = $("#example")
    .DataTable({
      responsive: true,
    })
    .columns.adjust()
    .responsive.recalc();
});
import JetApplicationLogo from "./../../../Jetstream/ApplicationLogo";

export default {
  components: {
    JetApplicationLogo,
  },
  props: ["leads"],
};
</script>
