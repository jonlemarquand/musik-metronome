<template>
    <header>
        <Logo />
    </header>
</template>

<script>

import Logo from './Logo.vue'

export default {
    name: "Header",
    components: { Logo }
}
</script>

<style scoped lang="scss">
@import '~@/_variables.scss';

header {
    margin-bottom: $space-4;
    margin-top: $space-1;
}
</style>
