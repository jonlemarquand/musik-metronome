<template>
    <Header />
    <slot />
</template>

<script>
import Header from "./Header";
export default {
    name: "Layout",
    components: {Header}
}
</script>

<style scoped>

</style>
