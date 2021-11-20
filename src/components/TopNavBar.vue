<template>
  <v-container v-show="manager != '1'" fluid>
    <div class="d-flex">
      <div class="mr-auto"></div>
      <div class="NavBar">
        <div>
          <v-btn depressed color="black" to="/">
            <span class="linkText">Home</span>
          </v-btn>
        </div>
        <div>
          <v-btn depressed color="black" to="/about">
            <span class="linkText">About</span>
          </v-btn>
        </div>
        <div>
          <v-btn depressed color="black" to="/menu">
            <span class="linkText">Menu</span>
          </v-btn>
        </div>
        <div>
          <v-btn depressed color="black" to="/blog">
            <span class="linkText">Blogs</span>
          </v-btn>
        </div>
        <div>
          <v-btn depressed color="black" to="/reservation">
            <span class="linkText">Reservation</span>
          </v-btn>
        </div>
        <div>
          <v-btn v-show="user === null" depressed color="black" to="/auth">
            <span class="linkText">Sign in</span>
          </v-btn>
        </div>

        <div>
          <v-btn v-show="user !== null" depressed color="black" to="/account">
            <span class="linkText"> My Acccount</span>
          </v-btn>
        </div>
      </div>
    </div>
  </v-container>
</template>

<script>
export default {
  name: "TopNavBar",
  data() {
    var managerValue = "0";
    var userValue = null;
    if (localStorage.getItem("User") !== null) {
      managerValue = JSON.parse(localStorage.getItem("User")).manager;
      userValue = localStorage.getItem("User");
    }

    return {
      user: userValue,
      manager: managerValue,
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
.NavBar {
  display: flex;
}
@media (max-width: 45em) {
  .NavBar > div:nth-child(1) {
    display: none;
  }
  .NavBar > div:nth-child(2) {
    display: none;
  }
  .NavBar > div:nth-child(4) {
    display: none;
  }
}
@media (max-width: 15em) {
  .NavBar > div:nth-child(1) {
    display: none;
  }
  .NavBar > div:nth-child(2) {
    display: none;
  }
  .NavBar > div:nth-child(4) {
    display: none;
  }
  .NavBar > div {
    width: 70%;
  }
}
</style>
