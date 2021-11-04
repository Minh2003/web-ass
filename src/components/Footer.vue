<template>
  <footer id="footer">
    <div class="wrapper">
      <div>
        <h1>logo</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit
          tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce
          a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at
          viverra. Class aptent taciti sociosqu ad litora torquent per conubia
          nostra, per inceptos himenaeos.
        </p>
      </div>
      <div>
        <h1>Contact</h1>
        <p>
          Call: (+84) 0123 456 789 <br />
          Address: 817 Le Hong Phong Street, Ho Chi Minh City
        </p>
      </div>
      <div>
        <h1>Subscribe</h1>
        <Button text="Create Account" :width="'24.375vw'" :height="'2.778vw'" />
      </div>
    </div>
  </footer>
</template>

<script>
import Button from "./Button.vue";
export default {
  components: { Button },
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

.wrapper > div {
  line-height: 30px;
}

.h1 {
  font-family: cursive;
}
</style>