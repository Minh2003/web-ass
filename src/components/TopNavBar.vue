<template>
  <v-container fluid>
    <div class="d-flex">
      <div class="mr-auto">Logo</div>
      <div class="NavBar">
        <v-btn depressed color="black" to="/">
          <span class="linkText">Home</span>
        </v-btn>
        <v-btn depressed color="black" to="/about">
          <span class="linkText">About</span>
        </v-btn>
        <v-btn depressed color="black" to="/menu">
          <span class="linkText">Menu</span>
        </v-btn>
        <v-btn depressed color="black" to="/blog">
          <span class="linkText">Blog</span>
        </v-btn>
        <v-btn depressed color="black" to="/reservation">
          <span class="linkText">Make Reservation</span>
        </v-btn>
        <v-btn v-show="user === null" depressed color="black" to="/auth">
          <span class="linkText">Sign in</span>
        </v-btn>

        <v-btn v-show="user !== null" depressed color="black" to="/account">
          <span class="linkText"> My Acccount</span>
        </v-btn>
      </div>
    </div>
  </v-container>
</template>

<script>
export default {
  name: "TopNavBar",
  data() {
    return {
      user: localStorage.getItem("User"),
    };
  },
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
