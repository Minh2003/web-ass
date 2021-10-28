<template>
  <!-- User Admin Item -->
  <md-content
    v-if="type == 'User'"
    :style="[style]"
    class="md-layout md-gutter md-elevation-2"
  >
    <div :style="[element, primary]" class="md-layout-item" :class="layout[0]">
      {{ items[0] }}
    </div>
    <div :style="[element, primary]" class="md-layout-item" :class="layout[1]">
      {{ items[1] }}
    </div>
    <div
      :style="[element, secondary]"
      class="md-layout-item"
      :class="layout[2]"
    >
      {{ items[2] }}
    </div>
    <div
      :style="[element, secondary]"
      class="md-layout-item"
      :class="layout[3]"
    >
      {{ items[3] }}
    </div>
    <Button
      :style="[element]"
      class="md-layout-item"
      :class="layout.slice(-2)[0]"
      text="Edit"
      :width="'96px'"
      :height="'27px'"
    />
    <Button
      :style="[element]"
      class="md-layout-item"
      :class="layout.slice(-1)[0]"
      text="Delete"
      :width="'96px'"
      :height="'27px'"
    />
  </md-content>

  <!-- Dish Admin Item -->
  <md-content
    v-else-if="type == 'Dish'"
    :style="[style]"
    class="md-layout md-gutter md-elevation-2"
  >
    <div :style="[element, primary]" class="md-layout-item" :class="layout[0]">
      {{ items[0] }}
    </div>
    <div :style="[element, primary]" class="md-layout-item" :class="layout[1]">
      {{ items[1] }}
    </div>
    <div
      :style="[element, secondary]"
      class="md-layout-item"
      :class="layout[2]"
    >
      <img :style="[dishImage]" :src="items[2]" :alt="items[2]" />
    </div>
    <div
      :style="[element, secondary]"
      class="md-layout-item"
      :class="layout[3]"
    >
      {{ items[3].slice(0, 80) + "..." }}
    </div>
    <Button
      :style="[element]"
      class="md-layout-item"
      :class="layout.slice(-2)[0]"
      text="Edit"
      :width="'96px'"
      :height="'27px'"
    />
    <Button
      :style="[element]"
      class="md-layout-item"
      :class="layout.slice(-1)[0]"
      text="Delete"
      :width="'96px'"
      :height="'27px'"
    />
  </md-content>
</template>

<script>
import Button from "./Button.vue";

export default {
  name: "AdminItem",
  components: { Button },
  props: {
    width: String,
    height: String,
    layout: Array,
    items: Array,
    type: String,
    imgSize: String,
  },
  data() {
    return {
      style: {
        margin: "20px auto",
        width: this.width,
        height: this.height,
        borderRadius: "20px",
        background: "#f7fafc",
        display: "flex",
        alignItems: "center",
        justifyContent: "center",
      },
      element: {
        textAlign: "center",
      },
      primary: {
        fontFamily: "Roboto",
        fontSize: "18px",
        fontWeight: "700",
        color: "#2a4365",
      },
      secondary: {
        fontFamily: "Poppins",
        fontSize: "14px",
        lineHeight: "160%",
        textDecorationLine: "underline",
        color: "#6a6a6a",
      },
      dishImage: {
        width: this.imgSize,
        height: this.imgSize,
        borderRadius: "10px",
      },
    };
  },
};
</script>

<style></style>
