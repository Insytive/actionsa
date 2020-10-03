<template>
  <div class="min-h-screen bg-gray-100">
    <nav class="bg-white text-green-100 border-b">
      <!-- Primary Navigation Menu -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
              <jet-nav-link href="/" :active="$page.currentRouteName == 'home'">
                <jet-application-mark class="block h-9 w-auto" />
              </jet-nav-link>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
              <jet-nav-link
                href="/"
                :active="$page.currentRouteName == 'dashbaord'"
              >
                Dashboard
              </jet-nav-link>

              <jet-nav-link
                href="/become-a-supporter"
                :active="$page.currentRouteName == 'become-a-supporter'"
              >
                Become a Supporter
              </jet-nav-link>

              <!--              <jet-nav-link-->
              <!--                href="/become-a-member"-->
              <!--                :active="$page.currentRouteName == 'become-a-member'"-->
              <!--              >-->
              <!--                Become a Member-->
              <!--              </jet-nav-link>-->

              <jet-nav-link
                href="/register"
                :active="$page.currentRouteName == 'register'"
              >
                Become a Volunteer
              </jet-nav-link>
            </div>
          </div>

          <!-- Settings Dropdown -->
          <div class="hidden sm:flex sm:items-center sm:ml-6">
            <div class="ml-3 relative"></div>
          </div>

          <!-- Hamburger -->
          <div class="-mr-2 flex items-center sm:hidden">
            <button
              @click="showingNavigationDropdown = !showingNavigationDropdown"
              class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
            >
              <svg
                class="h-6 w-6"
                stroke="currentColor"
                fill="none"
                viewBox="0 0 24 24"
              >
                <path
                  :class="{
                    hidden: showingNavigationDropdown,
                    'inline-flex': !showingNavigationDropdown,
                  }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h16M4 18h16"
                />
                <path
                  :class="{
                    hidden: !showingNavigationDropdown,
                    'inline-flex': showingNavigationDropdown,
                  }"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Responsive Navigation Menu -->
      <div
        :class="{
          block: showingNavigationDropdown,
          hidden: !showingNavigationDropdown,
        }"
        class="sm:hidden"
      >
        <div class="pt-2 pb-3 space-y-1">
          <jet-responsive-nav-link
            href="/dashboard"
            :active="$page.currentRouteName == 'dashboard'"
          >
            Dashboard
          </jet-responsive-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1 text-white">
          <jet-nav-link
            href="/become-a-supporter"
            :active="$page.currentRouteName == 'become-a-supporter'"
          >
            Become a Supporter
          </jet-nav-link>
        </div>

        <div class="pt-2 pb-3 space-y-1 text-green-100">
          <jet-nav-link
            href="/register"
            :active="$page.currentRouteName == 'register'"
          >
            Become a Volunteer
          </jet-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
          <div class="mt-3 space-y-1">
            <jet-responsive-nav-link
              href="#"
              :active="$page.currentRouteName == 'profile.show'"
            >
              Profile
            </jet-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" @submit.prevent="logout">
              <jet-responsive-nav-link as="button">
                Logout
              </jet-responsive-nav-link>
            </form>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Heading -->
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <slot name="header"></slot>
      </div>
    </header>

    <!-- Page Content -->
    <main>
      <slot></slot>
    </main>

    <!-- Modal Portal -->
    <portal-target name="modal" multiple> </portal-target>
  </div>
</template>

<script>
import JetApplicationLogo from "./../Jetstream/ApplicationLogo";
import JetApplicationMark from "./../Jetstream/ApplicationMark";
import JetDropdown from "./../Jetstream/Dropdown";
import JetDropdownLink from "./../Jetstream/DropdownLink";
import JetNavLink from "./../Jetstream/NavLink";
import JetResponsiveNavLink from "./../Jetstream/ResponsiveNavLink";
export default {
  components: {
    JetApplicationLogo,
    JetApplicationMark,
    JetDropdown,
    JetDropdownLink,
    JetNavLink,
    JetResponsiveNavLink,
  },
  data() {
    return {
      showingNavigationDropdown: false,
    };
  },
  computed: {
    path() {
      return window.location.pathname;
    },
  },
};
</script>
