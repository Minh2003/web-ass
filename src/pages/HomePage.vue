<template>
  <div class="background">
    <div class="home-wrapper">
      <div class="home-title">
        <p>Cozy food zone</p>
      </div>
      <div class="home-description d-flex justify-center">
        <p>
          There are many variations of passages of Lorem Ipsum available, but
          the majority have suffered alteration in some form, by injected humour
        </p>
      </div>
      <div class="btn-wrapper d-flex justify-center">
        <Button
          @onClick="handleBookBtnClick"
          text="Book Your Table"
          width="207px"
          height="53px"
          to="/reservation"
        />
      </div>
    </div>
  </div>
</template>

<script>
import Button from "../components/Button.vue";
export default {
  name: "HomePage",
  components: { Button },
  methods: {
    handleBookBtnClick() {
      this.$router.push({ name: "makeReservation" });
    },
  },
};
</script>

<style scoped>
@media screen and (max-width: 1400px) {
  .background {
    background-image: linear-gradient(rgba(0, 0, 0, 0.527), rgba(0, 0, 0, 0.5)),
      url(https://s3.eu-west-2.amazonaws.com/dc-york/images/_1800x875_crop_center-center_90_none/jay-wennington-N_Y88TWmGwA-unsplash_2021-05-26-084422.jpg);
    height: 100vh;
    width: 100vw;
  }
  .home-wrapper {
    margin: 20vh;
  }
  .home-title {
    font-family: Oleo Script Swash Caps;
    text-align: center;
    font-size: 600%;
    margin: 2% 0% -1% 0%;
    color: white;
  }
  .home-description {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    text-align: center;
    margin: 0vh 40vh 2vh 40vh;
    font-size: 18px;
    color: white;
  }
}
@media screen and (max-width: 800px) {
  .background {
    background-image: linear-gradient(rgba(0, 0, 0, 0.527), rgba(0, 0, 0, 0.5)),
      url(https://s3.eu-west-2.amazonaws.com/dc-york/images/_1800x875_crop_center-center_90_none/jay-wennington-N_Y88TWmGwA-unsplash_2021-05-26-084422.jpg);
    height: 75vh;
    width: 100vw;
  }
  .home-wrapper {
    margin: 15vh 10vh;
  }
  .home-title {
    font-family: Oleo Script Swash Caps;
    text-align: center;
    font-size: 500%;
    margin: 0 0 2% 0;
    color: white;
  }
  .home-description {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    text-align: center;
    margin: 0vh 8vh 4vh 8vh;
    font-size: 16px;
    color: white;
  }
}
@media screen and (max-width: 500px) {
  .background {
    background-image: linear-gradient(rgba(0, 0, 0, 0.527), rgba(0, 0, 0, 0.5)),
      url(https://s3.eu-west-2.amazonaws.com/dc-york/images/_1800x875_crop_center-center_90_none/jay-wennington-N_Y88TWmGwA-unsplash_2021-05-26-084422.jpg);
    height: 95vh;
    width: 100vw;
  }
  .home-wrapper {
    margin: 15vh 0;
  }
  .home-title {
    font-family: Oleo Script Swash Caps;
    text-align: center;
    font-size: 350%;
    margin: 0 0 2% 0;
    color: white;
  }
  .home-description {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
      Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
    text-align: center;
    margin: 0vh 8vh 4vh 8vh;
    font-size: 16px;
    color: white;
  }
}
</style>
