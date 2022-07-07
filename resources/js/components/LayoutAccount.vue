<template>
    <div class="center-container">
        <LogoStrapline />
        <slot />
    </div>
</template>

<script>
import LogoStrapline from "./LogoStrapline";
export default {
    name: "LayoutAccount",
    components: {LogoStrapline}
}
</script>

<style lang="scss">
@import '~@/_variables.scss';
.center-container {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

</style>
