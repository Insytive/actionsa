<template>
    <div class="container mx-auto py-8 mt-10">
        <div class="bg-white">
            <div class="text-4xl font-bold uppercase leading-10">Welcome to ActionSA</div>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full lg:w-1/3">
                <div id="custom-card" class="p-6 mt-3">
                    <div class="flex items-center">
                        <svg width="35" height="35" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                        </svg>

                        <div
                            class="ml-3 text-md leading-7 font-semibold"
                        >
                            <jet-nav-link
                                href="/become-a-supporter"
                                class="text-white hover:text-white hover:no-underline text-lg"
                                >Become a supporter</jet-nav-link
                            >
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-4 ml-2 text-sm text-white">
                            Become one of our Supporters.
                        </div>

                        <jet-nav-link
                            href="/become-a-supporter"
                            class="hover:no-underline"
                            id="read-more"
                        >
                            <div
                                class="mt-4 flex items-center text-sm bg-white hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-blue-500 hover:border-transparent rounded-full hover:bg-white"
                            >
                                <div class="text-green-100">Join Supporters</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg
                                        viewBox="0 0 20 20"
                                        fill="#fff"
                                        class="arrow-right w-4 h-4"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </jet-nav-link>
                    </div>
                </div>
            </div>
            <!-- ./become a supporter -->

            <div class="lg:px-3 xl:px-3 sm:p-0 w-full lg:w-1/3">
                <div id="custom-card" class="p-6 mt-3 card-2">
                    <div class="flex items-center">
                        <svg width="35" height="35" viewBox="0 0 16 16" class="bi bi-person-badge" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 0 1 4.5 0h7A2.5 2.5 0 0 1 14 2.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2.5zM4.5 1A1.5 1.5 0 0 0 3 2.5v10.795a4.2 4.2 0 0 1 .776-.492C4.608 12.387 5.937 12 8 12s3.392.387 4.224.803a4.2 4.2 0 0 1 .776.492V2.5A1.5 1.5 0 0 0 11.5 1h-7z"/>
                            <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM6 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
                            </svg>
                        <div
                            class="ml-3 text-lg  leading-7 font-semibold"
                        >
                            <jet-nav-link
                                href="/become-a-member"
                                class="text-white hover:text-white hover:no-underline  text-lg"
                                >Become a member</jet-nav-link
                            >
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="mt-4 ml-2 text-sm text-white">
                            Become one of our members.
                        </div>

                        <jet-nav-link
                            href="/become-a-member"
                            class="hover:no-underline font-light "
                           
                        >
                            <div
                                class="mt-4 ml-2 flex items-center text-sm bg-white hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-3 border border-blue-500 hover:border-transparent rounded-full hover:bg-white"
                            >
                                <div class="text-green-100">Join members</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg
                                        viewBox="0 0 20 20"
                                        fill="#fff"
                                        class="arrow-right w-4 h-4"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"
                                        ></path>
                                    </svg>
                                </div>
                            </div>
                        </jet-nav-link>
                    </div>
                </div>
            </div>
            <!-- ./become a member -->

            <div class="w-full lg:w-1/3">
                <div id="custom-card" class="p-6 mt-3 not-allowed card-3">
                    <div class="flex items-center">
                     <svg width="35" height="35" viewBox="0 0 16 16" class="bi bi-lock" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.5 8h-7a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1zm-7-1a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-7zm0-3a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                        </svg>
                        <div
                            class="ml-3 text-lg  text-white leading-7 font-semibold"
                        >
                            <jet-nav-link
                                href="javascript:;"
                                class="cursor-not-allowed hover:text-white hover:no-underline text-lg"
                            >
                                Become a Volunteer
                            </jet-nav-link>
                        </div>
                    </div>

                    <div class="ml-12">
                        <div class="text-4xl font-bold">Coming Soon...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import JetApplicationLogo from "./../Jetstream/ApplicationLogo";
import JetNavLink from "./../Jetstream/NavLink";

export default {
    components: {
        JetApplicationLogo,
        JetNavLink
    }
};
</script>
