<template>
  <v-container fluid>
    <div class="d-flex">
      <div class="mr-auto">Logo</div>
      <div class="NavBar">
        <v-btn depressed color="black" to="/">
          <span class="linkText">Home</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">About</span>
        </v-btn>
        <v-btn depressed color="black" to="/menu">
          <span class="linkText">Menu</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Blog</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Make Reservation</span>
        </v-btn>
        <v-btn depressed color="black" to="/admin">
          <span class="linkText">Sign in</span>
        </v-btn>
      </div>
    </div>
  </v-container>
</template>

<script>
export default {
  name: "TopNavBar",
};
</script>

<style scoped>
.container {
  width: 100vw;
  margin: 0;
  background-color: black;
}
.linkText {
  color: white;
}
</style>