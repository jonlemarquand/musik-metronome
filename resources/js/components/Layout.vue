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

<style lang="scss">
@import '~@/_variables.scss';

* {
    box-sizing: border-box;
}

body {
    font-family: $secondaryFont;
}

#app {
    min-height: 100vh;
    max-width: 1400px;
    width: calc(100% - $space-4);
    margin: 0 auto;
}

.container {
    display: grid;
    grid-gap: 15px;
    width: 100%;
    grid-template-columns: repeat(4, 1fr);

    @include breakpoint(md) {
        grid-template-columns: repeat(8, 1fr);
    }

    @include breakpoint(lg) {
        grid-template-columns: repeat(12, 1fr);
    }

}
</style>
