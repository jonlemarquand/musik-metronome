<template>
    <button
        type="button"
        class="timer-button"
        :class="activeTask ? 'timer-button--stop' : 'timer-button--go'"
        @click="setActive"
    >
        {{ activeTask ? 'STOP' : 'GO'}}
    </button>
</template>

<script>

export default {
    name: "TimerInputButton",
    computed: {
        activeTask() {
            return this.$store.state.activeTask
        }
    },
    methods: {
        setActive() {
            this.$store.commit('setActive')
            console.log(this.$store.state.activeTask)
        }
    }
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
