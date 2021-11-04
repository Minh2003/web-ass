<template>
  <div>
    <!-- User Admin Item -->
    <v-container
      :class="`elevation-2`"
      v-if="type == 'User'"
      elevation="3"
      :style="[style]"
    >
      <v-row align="center" justify="center">
        <v-col :style="[element, primary]" :cols="layout[0]">
          {{ items[0] }}
        </v-col>
        <v-col :style="[element, primary]" :cols="layout[1]">
          {{ items[1] }}
        </v-col>
        <v-col :style="[element, secondary]" :cols="layout[2]">
          {{ items[2] }}
        </v-col>
        <v-col :style="[element, secondary]" :cols="layout[3]">
          {{ items[3] }}
        </v-col>
        <v-col :cols="layout.slice(-2)[0]">
          <Button
            :style="[element]"
            text="Edit"
            :width="'96px'"
            :height="'27px'"
          />
        </v-col>
        <v-col :cols="layout.slice(-2)[0]">
          <Button
            :style="[element]"
            text="Delete"
            :width="'96px'"
            :height="'27px'"
          />
        </v-col>
      </v-row>
    </v-container>

    <!-- Dish Admin Item -->
    <v-container
      :class="`elevation-2`"
      v-else-if="type == 'Dish'"
      :style="[style]"
    >
      <v-row align="center" justify="center">
        <v-col :style="[element, primary]" :cols="layout[0]">
          {{ items[0] }}
        </v-col>
        <v-col :style="[element, primary]" :cols="layout[1]">
          {{ items[1] }}
        </v-col>
        <v-col :style="[element, secondary]" :cols="layout[2]">
          <img :style="[dishImage]" :src="items[2]" :alt="items[2]" />
        </v-col>
        <v-col :style="[element, secondary]" :cols="layout[3]">
          {{ items[3].slice(0, 40) + "..." }}
        </v-col>
        <v-col :cols="layout.slice(-2)[0]">
          <Button
            :style="[element]"
            text="Edit"
            :width="'90px'"
            :height="'27px'"
          />
        </v-col>
        <v-col :cols="layout.slice(-2)[0]">
          <Button
            :style="[element]"
            text="Delete"
            :width="'90px'"
            :height="'27px'"
          />
        </v-col>
      </v-row>
    </v-container>
  </div>
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
