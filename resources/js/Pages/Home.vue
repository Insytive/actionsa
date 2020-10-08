<template>
  <div>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden">
          <about />
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden text-center text-gray-500 text-sm">
          Powered by
          <a
            href="https://www.thrivebs.co.za/"
            class="hover:text-green-100"
            target="_blank"
            >Thrive Business Solutions <br />
          </a>

            <small class="mt-10">Version (0.5.0 Beta) </small>
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
