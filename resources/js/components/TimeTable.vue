<template>
    <div class="container timetable">
        <TimeTableFilters />
        <TimeTableRow />
        <TimeTableRow />
        <TimeTableRow />
    </div>
</template>

<script>

import TimeTableRow from './TimeTableRow';
import TimeTableFilters from "./TimeTableFilters";

export default {
    name: "TimeTable",
    components: {TimeTableRow, TimeTableFilters}
}
</script>

<style scoped lang="scss">
    @import '~@/_variables.scss';
    .timetable {

        display: flex;
        flex-direction: column;
        grid-gap: 0;
        margin-top: $space-5;

    }
</style>
