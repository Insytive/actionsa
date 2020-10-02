<template>
  <inertia-link :href="href" :class="classes">
    <slot></slot>
  </inertia-link>
</template>

<script>
export default {
  props: ["href", "active"],

  computed: {
    classes() {
      return this.active
        ? "inline-flex items-center px-1 pt-1 border-b-2 text-sm font-bold leading-5 text-gray-900 focus:outline-none  transition duration-150 ease-in-out hover:no-underline hover:text-black"
        : "inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white hover:text-gray-700 focus:outline-none focus:text-gray-700  transition duration-150 ease-in-out hover:no-underline hover:text-black";
    },
  },
};
</script>
