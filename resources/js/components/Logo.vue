<template>
    <div class="logo">Metronome</div>
</template>

<script>
export default {
    name: "Logo"
}
</script>

<style scoped lang="scss">
@import '~@/_variables.scss';

.logo {
    font-family: $primaryFont;
    font-weight: 500;
    text-transform: uppercase;
    font-size: 48px;
    line-height: 48px;
    padding-top: 4px;
}
</style>
