<template>
    <div class="timetable-row">
        <div class="timetable-row__project">Project X</div>
        <div class="timetable-row__task">This is a new task currently being built</div>
        <div class="timetable-row__category">Front-End Development</div>
        <div class="timetable-row__time">
            12.00
        </div>
    </div>
</template>

<script>
export default {
    name: "TimeTableRow"
}
</script>

<style scoped lang="scss">
@import '~@/variables.scss';
.timetable-row {
    &:nth-child(odd) {
        background: $colorGreenFaded;
    }

    padding: $space-2;
    display: flex;
    grid-gap: $space-5;
    align-items: center;

    &__project {
        width: 103px;
        color: $colorPink;
        font-weight: 600;
    }

    &__category {
        flex: 1;
        font-size: 14px;
        font-weight: 400;
        color: $colorGrey;
    }
}
</style>
