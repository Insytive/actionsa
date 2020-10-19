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
                    <a
                            class="mr-4 svg__search" v-on:click="openSearch()"
                        >
                           <svg width="18" height="19" viewBox="0 0 16 16" class="bi bi-search" fill="black" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                        </a> 
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
                            class="font-bold ml-4 py-2 px-4  rounded-full "  v-on:click="openSearch()"
                        >
                            <a
                                href="javascript:;"
                                class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-bold leading-5 text-white hover:text-red-100 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out hover:no-underline hover:text-red-100"
                                > <svg width="18" height="19" viewBox="0 0 16 16" class="bi bi-search" fill="#000" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                            </svg>
                            </a
                            >
                        </button>


                        
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

           <!-- search overlay -->
        <div id="myOverlay" class="overlay">
        <span class="closebtn" v-on:click="closeSearch()" title="Close Overlay">
            <svg width="2rem" height="2rem" viewBox="0 0 16 16" class="bi bi-x-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </span>
        <div class="overlay-content" >
            <form method="" >
            <input type="text" placeholder="Search for ID Number" name="search">
            <button type="submit">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="black" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
            </button>
            </form>
        </div>
        </div>
        <!-- ./search overlay -->
        <!-- Footer -->
        <footer class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden text-center text-gray-500 text-sm">
                    Powered by
                    <a
                        href="https://www.thrivebs.co.za/"
                        class="hover:text-green-100"
                        target="_blank"
                        >Thrive Business Solutions  <br />

                        
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
    },

     methods: {
    // Open the full screen search box
        openSearch: function() {
        document.getElementById("myOverlay").style.display = "block";
        },

        // Close the full screen search box
        closeSearch: function() {
        document.getElementById("myOverlay").style.display = "none";
        }        
    }
};
</script>
