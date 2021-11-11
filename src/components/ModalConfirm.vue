<template>
  <div class="text-center">
    <v-dialog v-model="dialog" width="500">
      <v-card>
        <v-card-title>
          <h2>
            {{ title }}
          </h2>
        </v-card-title>

        <v-card-text class="content">
          {{ content }}
        </v-card-text>

        <v-divider></v-divider>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn depressed color="gray" @click="dialog = false"> Cancel </v-btn>
          <v-btn color="#E1651F" @click="dialog = false">
            <span class="white--text">Confirm</span>
          </v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>

<script>
export default {
  data() {
    return {
      dialog: this.isOpen,
    };
  },
  props: ["title", "content", "isOpen"],
};
</script>

<style scoped>
.content {
  margin-top: 14px;
  font-size: 18px;
  font-weight: 500;
  padding: 5% 8% 6% 8%;
  color: black;
}
</style>