<template>
    <div class="container">
        <TimerInputTask />
        <TimerInputButton />
    </div>
</template>

<script>
import TimerInputButton from './TimerInputButton';
import TimerInputTask from './TimerInputTask';

export default {
    name: "TimerInput",
    components: {TimerInputButton, TimerInputTask}
}
</script>

<style scoped>

</style>
