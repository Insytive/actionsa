<template>
  <div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden">
          <about />
        </div>
      </div>
    </div>
    <footer class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden text-center text-gray-500 text-sm">
          Powered by Thrive Business Solutions
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import WebLayout from "../Layouts/WebLayout";
import About from "../Components/About";

export default {
  components: {
    WebLayout,
    About,
  },
};
</script>
