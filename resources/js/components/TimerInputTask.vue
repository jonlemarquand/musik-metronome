<template>
    <div class="timer-task">
        <Dropdown />
        <input type="text" class="timer-task__input" placeholder="I am working on..." />
        <Dropdown />
    </div>
</template>

<script>

import Dropdown from './Dropdown'

export default {
    name: "TimerInputTask",
    components: { Dropdown }
}
</script>

<style scoped lang="scss">
@import '~@/variables';
.timer-task {
    grid-column: span 4;
    border: 1px solid $colorGreen;
    border-radius: 4px;
    padding: $space-2 0;
    display: grid;
    grid-gap: 15px;
    grid-template-columns: repeat(10, 1fr);

    @include breakpoint(md) {
        grid-column: span 8;
    }

    @include breakpoint(lg) {
        grid-column: span 10;
    }

    > :first-child > :first-child {
        padding-left: $space-2;
    }

    > :last-child > :first-child {
        padding-right: $space-2;
        justify-content: flex-end;
    }



    &__input {
        grid-column: span 8;
        border: 0;
        font-size: 18px;
    }

}
</style>
