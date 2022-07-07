<template>
 <button class="metronome-button">{{ buttonText }}</button>
</template>

<script>
export default {
    name: "Button",
    props: {
        buttonText: String,
    }
}
</script>

<style scoped lang="scss">
@import '~@/_variables.scss';

.metronome-button {

    background: $colorGreen;
    color: $colorWhite;
    font-family: $primaryFont;
    font-size: 28px;
    font-weight: 600;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    border: 0;
    border-radius: 4px;
    padding: $space-2 $space-3;
    margin-top: $space-3;

    &:hover, &:focus {
        background: $colorPink;
    }
}

</style>
