<template>
    <Button is-link button-text="Get started" button-link="/account/new" />
    <p>Already have an account? <Link href="/account/login">Log in</Link></p>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

import Button from "../components/Button";
import LayoutAccount from "../components/LayoutAccount";

export default {
    layout: LayoutAccount,
    name: "Account",
    components: {
        Button,
        Link
    }
}
</script>

<style scoped>

</style>
