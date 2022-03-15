<template>
    <button type="button" class="timer-button timer-button--go">GO</button>
</template>

<script>
export default {
    name: "TimerInputButton"
}
</script>

<style scoped lang="scss">
@import '~@/variables.scss';
.timer-button {

    display: flex;
    align-items: center;
    justify-content: center;
    color: $colorWhite;
    font-family: $primaryFont;
    font-weight: 600;
    font-size: 36px;
    letter-spacing: 0.05em;
    border: 0;
    border-radius: 4px;
    padding-top: 4px;
    grid-column: span 4;

    @include breakpoint(md) {
        grid-column: span 8;
    }

    @include breakpoint(lg) {
        grid-column: span 2;
    }

    &--go {
        background: $colorGreen;
    }

    &--stop {
        background: $colorPink;
    }

}
</style>
