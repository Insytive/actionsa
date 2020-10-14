<template>
    <div>
        <nav class=" text-white py-3">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="flex-shrink-0 flex items-center">
                            <jet-application-logo class="block h-15 w-auto" />
                        </div>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="ml-3 relative"></div>
                    </div>

                    <!-- Register -->

                    <div class="-mr-2 hidden lg:flex items-center">
                        <button
                            class="font-bold py-2 px-4 bg-red-100 rounded-full "
                        >
                            <a
                                href="https://www.actionsa.org.za/"
                                class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white hover:text-red-100 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out hover:no-underline hover:text-red-100"
                                >&larr; Back to Main Website</a
                            >
                        </button>

                        <button
                            class="ml-2 py-2 px-4 font-bold bg-orange-100 rounded-full"
                        >
                            <a
                                href="/login"
                                class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out hover:no-underline  hover:text-white hover:bg-orange-500"
                                :active="$page.currentRouteName == 'login'"
                            >
                                Login
                            </a>
                        </button>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button
                            @click="
                                showingNavigationDropdown = !showingNavigationDropdown
                            "
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
                                        'inline-flex': !showingNavigationDropdown
                                    }"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                                <path
                                    :class="{
                                        hidden: !showingNavigationDropdown,
                                        'inline-flex': showingNavigationDropdown
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
                    hidden: !showingNavigationDropdown
                }"
                class="md:hidden"
            >
                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="mt-3 space-y-1">
                        <!-- <jet-responsive-nav-link
              href="#"
              :active="$page.currentRouteName == 'profile.show'"
            >
              Profile
            </jet-responsive-nav-link> -->

                        <button
                            class="font-bold ml-4 py-2 px-4 bg-red-100 rounded-full "
                        >
                            <a
                                href="https://www.actionsa.org.za/"
                                class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white hover:text-red-100 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out hover:no-underline hover:text-red-100"
                                >&larr; Back to Main Website</a
                            >
                        </button>

                        <button
                            class="ml-2 top-btn font-bold bg-orange-100 rounded-full"
                        >
                            <a
                                href="/login"
                                :active="$page.currentRouteName == 'login'"
                            >
                                Login
                            </a>
                        </button>

                        <!-- Authentication -->
                        <!-- <form method="POST" @submit.prevent="logout">
              <jet-responsive-nav-link as="button">
                Logout
              </jet-responsive-nav-link>
            </form> -->
                    </div>
                </div>
            </div>
        </nav>
        <div>
            <div class="max-w-7xl mx-auto sm:px-6">
                <div class="bg-white overflow-hidden">
                    <splash />
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

                    <small> Version (0.5.0 Beta) </small>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
import WebLayout from "../Layouts/WebLayout";
import Splash from "../Components/Splash";
import JetApplicationLogo from "./../Jetstream/ApplicationLogo";
import JetResponsiveNavLink from "./../Jetstream/ResponsiveNavLink";
import JetDropdownLink from "./../Jetstream/DropdownLink";
import JetDropdown from "./../Jetstream/Dropdown";

export default {
    components: {
        WebLayout,
        Splash,
        JetApplicationLogo,
        JetResponsiveNavLink,
        JetDropdownLink,
        JetDropdown
    },

    data() {
        return {
            showingNavigationDropdown: false
        };
    }
};
</script>
