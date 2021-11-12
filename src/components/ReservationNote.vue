<template>
  <div v-if="isSuccess" :style="[style]">
    <div :style="[styleInfo]" v-for="(value, key, index) in notes" :key="index">
      <p>{{ key }}: {{ value }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "ReservationNote",
  props: {
    isSuccess: {
      type: Boolean,
      default: false,
    },
    notes: {
      type: Object,
    },
  },
  data() {
    return {
      style: {
        display: "flex",
        justifyContent: "center",
        flexWrap: "wrap",
      },
      styleInfo: {
        width: "50%",
        fontSize: "110%",
        display: "flex",
        justifyContent: "center",
        marginTop: "20px",
        fontFamily: "Poppins",
        fontWeight: "400",
      },
    };
  },
};
</script>

<style></style>
