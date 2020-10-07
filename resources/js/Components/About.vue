<template>
  <div class="container mx-auto py-8 px-4 mt-8">
    <div class="bg-white">
      <div>
        <jet-application-logo class="block h-15 w-auto" />
      </div>

      <div class="mt-8 text-4xl font-bold">Welcome to ActionSA</div>
    </div>

    <div class="flex flex-wrap mt-8">
      <div class="px-3 w-full lg:w-1/3">
        <div id="custom-card" class="p-6 mt-3">
          <div class="flex items-center">
            <svg
              id="card-icon"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 20 20"
            >
              <title>thumbs-up</title>
              <path
                d="M13.648 7.362c-0.133-0.355 3.539-3.634 1.398-6.291-0.501-0.621-2.201 2.975-4.615 4.603-1.332 0.898-4.431 2.81-4.431 3.867v6.842c0 1.271 4.914 2.617 8.648 2.617 1.369 0 3.352-8.576 3.352-9.938 0-1.368-4.221-1.344-4.352-1.7zM5 7.457c-0.658 0-3 0.4-3 3.123v4.848c0 2.721 2.342 3.021 3 3.021 0.657 0-1-0.572-1-2.26v-6.373c0-1.768 1.657-2.359 1-2.359z"
              ></path>
            </svg>

            <div class="ml-4 text-md uppercase leading-7 font-semibold">
              <a
                href="/become-a-supporter"
                class="text-white hover:text-white hover:no-underline"
                >Become a supporter</a
              >
            </div>
          </div>

          <div class="ml-12">
            <div class="mt-4 text-sm text-white">
              Become one of our Supporters.
            </div>

            <a
              href="/become-a-supporter"
              class="hover:no-underline"
              id="read-more"
            >
              <div
                class="mt-4 flex items-center text-sm font-semibold text-indigo-700"
              >
                <div class="text-white">Join Supporters</div>

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
            </a>
          </div>
        </div>
      </div>
      <!-- ./become a supporter -->

      <div class="w-full px-3 lg:w-1/3">
        <div id="custom-card" class="p-6 mt-3 card-2">
          <div class="flex items-center">
            <svg
              id="card-icon"
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="20"
              height="20"
              viewBox="0 0 20 20"
            >
              <title>v-card</title>
              <path
                d="M19 3h-18c-0.553 0-1 0.447-1 1v12c0 0.552 0.447 1 1 1h18c0.553 0 1-0.448 1-1v-12c0-0.552-0.447-1-1-1zM13 7h4v1h-4v-1zM11 14.803c-0.129-0.102-0.293-0.201-0.529-0.303-1.18-0.508-2.961-1.26-2.961-2.176 0-0.551 0.359-0.371 0.518-1.379 0.066-0.418 0.385-0.007 0.445-0.961 0-0.38-0.174-0.475-0.174-0.475s0.088-0.562 0.123-0.996c0.036-0.453-0.221-1.8-1.277-2.097-0.186-0.188-0.311-0.111 0.258-0.412-1.244-0.059-1.534 0.592-2.196 1.071-0.564 0.42-0.717 1.085-0.689 1.439 0.037 0.433 0.125 0.996 0.125 0.996s-0.175 0.094-0.175 0.474c0.061 0.954 0.38 0.543 0.445 0.961 0.158 1.008 0.519 0.828 0.519 1.379 0 0.916-1.781 1.668-2.961 2.176-0.203 0.088-0.349 0.173-0.471 0.26v-9.76h9v9.803zM18 11h-5v-1h5v1z"
              ></path>
            </svg>

            <div class="ml-4 text-sm white leading-7 uppercase font-semibold">
              <a
                href="/become-a-member"
                class="hover:text-white hover:no-underline"
                >Become a Member</a
              >
            </div>
          </div>

          <div class="ml-12">
            <div class="mt-2 text-sm text-white">Become a member</div>

            <a
              href="/become-a-member"
              class="hover:no-underline"
              id="read-more"
            >
              <div class="mt-4 flex items-center text-sm font-semibold">
                <div class="text-white">Join Volunteers</div>

                <div class="ml-1 text-indigo-500"></div>
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="w-full px-3 lg:w-1/3">
        <div id="custom-card" class="p-6 mt-3 not-allowed card-3">
          <div class="flex items-center">
            <svg viewBox="0 0 20 20" fill="#fff" class="arrow-right w-4 h-4">
              <path
                fill-rule="evenodd"
                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <div
              class="ml-4 text-sm uppercase text-white leading-7 font-semibold"
            >
              <a
                href="javascript:;"
                class="cursor-not-allowed hover:text-white hover:no-underline"
              >
                Become a Volunteer
              </a>
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

export default {
  components: {
    JetApplicationLogo,
  },
};
</script>
