<template>
    <Button button-text="Get started" />
    <p>Already have an account? Log in</p>
</template>

<script>
import Button from "../components/Button";
import LayoutAccount from "../components/LayoutAccount";

export default {
    layout: LayoutAccount,
    name: "Account",
    components: {
        Button
    }
}
</script>

<style scoped>

</style>
