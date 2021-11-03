<template>
  <div class="container">
    <div class="d-flex">
      <div class="mr-auto p-2">Logo</div>
      <div class="NavBar">
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Home</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">About</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Menu</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Blog</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Make Reservtion</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Sign in</span>
        </v-btn>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "TopNavBar",
};
</script>

<style scoped>
.container {
  background-color: black;
}
.linkText {
  color: white;
}
</style>