<template>
    <TimerInput />
    <TimeTable />
</template>

<script>

import TimeTable from "../components/TimeTable";
import TimerInput from "../components/TimerInput";

export default {
    name: "Timer",
    components: {TimeTable, TimerInput}
}
</script>

<style scoped>

</style>
