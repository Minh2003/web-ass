<template>
  <div>
    <div v-if="this.type === 'BlogTitle'" :style="[style]">
      <div :style="[styleLabel, styleLabelBlog]">{{ label }}</div>
      <textarea :style="[styleTextArea]" v-model="content"></textarea>
    </div>

    <div v-if="this.type === 'BlogContent'" :style="[style]">
      <div :style="[styleLabel, styleLabelBlog]">{{ label }}</div>
      <textarea :style="[styleTextArea]" v-model="content"></textarea>
    </div>

    <div v-else-if="this.type === 'DishTitle'" :style="[style]">
      <div :style="[styleLabel, styleLabelDish]">{{ label }}</div>
      <textarea :style="[styleTextArea]" v-model="content"></textarea>
    </div>

    <div v-else-if="this.type === 'DishDescription'" :style="[style]">
      <div :style="[styleLabel, styleLabelDish]">{{ label }}</div>
      <textarea
        :style="[styleTextArea, styleTextAreaDishDescription]"
        v-model="content"
      ></textarea>
    </div>
  </div>
</template>

<script>
export default {
  name: "ControlField",
  props: {
    label: String,
    width: String,
    height: String,
    rows: String,
    type: String,
    content: String,
  },
  data() {
    return {
      style: {
        width: this.width,
        display: "flex",
        margin: "20px auto",
        alignItems: "center",
        justifyContent: "center",
        flexWrap: "wrap",
      },
      styleLabel: {
        marginBottom: "12px",
        width: "100%",
        fontFamily: "Poppins",
        fontWeight: "700",
        fontSize: "18px",
      },
      styleLabelBlog: {
        color: "#1c1c1c",
      },
      styleLabelDish: {
        color: "#223263",
      },
      styleTextArea: {
        width: "100%",
        height: this.height,
        fontFamily: "Poppins",
        padding: "16px 32px",
        fontSize: "12px",
        color: "#9098b1",
        lineHeight: "180%",
        letterSpacing: "0.5px",
        fontWeight: "bold",
        boxSizing: "border-box",
        border: "1px solid #ebf0ff",
        borderRadius: "5px",
      },
      styleTextAreaDishDescription: {
        color: "#6a6a6a",
      },
    };
  },
};
</script>

<style></style>
