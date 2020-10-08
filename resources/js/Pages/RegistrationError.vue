<template>
    <web-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Registration Failed
            </h2>
        </template>

        <section class="registered">
            <div class="container mb-10">
                <h2 class="registered__title">Sorry!</h2>
                <h4>That ID number has already been registered.</h4>
            </div>

            <inertia-link href="/">Back</inertia-link>
        </section>
    </web-layout>
</template>

<script>

import WebLayout from "../Layouts/WebLayout";

export default {
    components: {
        WebLayout,
    },
}
</script>
