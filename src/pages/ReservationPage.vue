<template>
  <div class="reservation-page-wrapper">
    <div class="title-wrapper">
      <div class="reservation-title">
        <p>Make Reservation</p>
      </div>
      <div class="reservation-description">
        <p>
          Fish is one of the most wholesome foods that man can eat. In fact,
          people have been eating fish throughout human.
        </p>
      </div>
    </div>
    <div class="reservation-form-wrapper">
      <Form
        :type="'Reservation'"
        :data="formData"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div>
  </div>
</template>

<script>
import Form from "../components/Form.vue";

export default {
  name: "ReservationPage",
  components: { Form },
  props: {},
  data() {
    return {
      formData: {
        // Vue Object Data will be convert into Observer
        fullname: "",
        totalPeople: "",
        date: "",
        time: "",
        message: "",
        email: "",
        phone: "",
      },
    };
  },
  methods: {
    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
    },

    handleSubmit() {
      console.log(this.formData);
    },
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap");
.title-wrapper {
  margin-bottom: 4%;
}
.reservation-title {
  font-family: Oleo Script Swash Caps;
  text-align: center;
  font-size: 500%;
  margin: 2% 0% -1% 0%;
}
.reservation-description {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
    Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  text-align: center;
}
.reservation-form-wrapper {
  width: 100%;
}
.reservation-page-wrapper {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  width: 50%;
  margin: 0 auto;
}
</style>
