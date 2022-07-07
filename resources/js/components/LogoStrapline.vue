<template>
    <div class="logo-strapline">
        <div class="logo-strapline__title">Metronome</div>
        <div class="logo-strapline__strapline">Keep the whole team in time</div>
    </div>
</template>

<script>
export default {
    name: "LogoStrapline"
}
</script>

<style scoped lang="scss">
@import '~@/_variables.scss';

.logo-strapline {

    text-align: center;

    &__title {
        font-family: $primaryFont;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 96px;
        line-height: 48px;
        padding-top: 4px;
    }

    &__strapline {
        font-family: $secondaryFont;
        font-size: 24px;
        line-height: 44px;
        font-weight: 300;
    }
}
</style>
