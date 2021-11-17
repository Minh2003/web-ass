<template>
  <footer id="footer">
    <div class="wrapper">
      <div class="des">
        <span class="menu-title">Cozy Foodzone </span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit
          tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce
          a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at
          viverra. Class aptent taciti sociosqu ad litora torquent per conubia
          nostra, per inceptos himenaeos.
        </p>
      </div>
      <div>
        <span class="menu-title">Contact </span>
        <p>
          Call: (+84) 123 456 789 <br />
          Address: 817 Le Hong Phong Street, Ho Chi Minh City
        </p>
      </div>
      <div>
        <span class="menu-title">Subcribe </span>

        <v-btn to="/reg" width="24.375vw" height="2.778vw" color="#e1651f">
          <span class="linkText">Create an account</span>
        </v-btn>
      </div>
    </div>
  </footer>
</template>

<script>
//import Button from "./Button.vue";
export default {
  components: {},
  name: "Footer",
};
</script>

<style scoped>
.wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  padding: 10px;
  background-color: black;
  color: white;
}
.wrapper > div:nth-child(2) {
  padding-left: 5vw;
}
.wrapper > div:nth-child(1) {
  overflow: hidden;
}

.wrapper > div {
  padding: 30px;
}

@media (max-width: 60em) {
  .wrapper {
    display: grid;
    grid-template-columns: 2fr 1fr;
    padding: 10px;
    background-color: black;
    color: white;
  }
  .des {
    display: none;
  }
}

.h1 {
  font-family: cursive;
}

@import url("https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap");
.title-wrapper {
  margin-bottom: 4%;
}
.menu-title {
  font-family: Oleo Script Swash Caps;
  text-align: center;
  font-size: 250%;
  margin: 2% 0% -1% 0%;
}
.menu-description {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  text-align: center;
  margin: 0% 0% -1% 0%;
}
.btn-wrapper {
  margin: 25px 0 65px 0;
}

.linkText {
  color: white;
  font-size: 1vw;
}
</style>