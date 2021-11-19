<template>
  <v-container fluid class="background">
    <v-row>
      <v-col>
        <v-layout align-center justify-center> Logo bên đây nè </v-layout>
      </v-col>
      <v-col>
        <v-layout align-center justify-center>
          <v-col>
            <Form
              :type="'Register'"
              :data="formData"
              :errorMessages="errorMessages"
              @onFormChange="handleFormChange"
              @onSubmit="handleSubmit"
            />
          </v-col>
        </v-layout>
        <v-layout align-center justify-center>
          Hoặc
          <v-btn text color="#e1651f" to="/auth">
            <span class="linkText">Đăng nhập</span>
          </v-btn>
        </v-layout>
        <div v-show="this.isFail" class="reservation-note">
          <div ref="noteTitle" class="note-title"></div>
          <ReservationNote :notes="{}" />
        </div>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import Form from "../components/Form.vue";
import $ from "jquery";
import * as yup from "yup";
import ReservationNote from "../components/ReservationNote.vue";

// import CustomTitle from "../components/CustomTitle.vue";
export default {
  components: { Form, ReservationNote },

  Formname: "regPage",

  data() {
    return {
      isFail: false,
      formData: {
        username: "",
        email: "",
        phone: "",
        password: "",
        confirmPassword: "",
      },
      errorMessages: {
        message: "",
        username: "",
        email: "",
        phone: "",
        password: "",
        confirmPassword: "",
      },
      schema: yup.object().shape({
        email: yup.string().email().label("Email"),
        phone: yup
          .string()
          .matches(/^[0-9]{10}$/, "Phone number must be 10 digits"),
      }),
    };
  },

  methods: {
    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
    },
    reloadPage() {
      window.location.reload();
      window.location.replace("http://localhost:8080/");
    },

    handleSubmit() {
      console.log(this.formData);
      console.log("submit ne");
      let value = JSON.parse(JSON.stringify(this.formData));
      //   username = value.;
      console.log(value);
      this.register();
    },

    register() {
      var __this = this;

      var settings = {
        url: `${process.env.VUE_APP_API_URL}/auth/register`,
        method: "POST",
        timeout: 0,
        data: {
          username: this.formData.username,
          password: this.formData.password,
          verify_password: this.formData.confirmPassword,
          phoneNumber: this.formData.phone,
          email: this.formData.email,
          avatar: "https://",
        },
        headers: {},
      };

      $.ajax(settings).then(function (response) {
        if (JSON.parse(response).status != 200) {
          __this.isFail = true;
          __this.$refs.noteTitle.innerHTML = JSON.parse(response).message;
        } else {
          const a = JSON.parse(response).response;
          console.log("a: ", a);
          // console.log(a.token);
          // console.log(a.user);
          if (localStorage.getItem("UserToken") != "")
            localStorage.removeItem("UserToken");
          if (localStorage.getItem("User") != "")
            localStorage.removeItem("User");
          localStorage.setItem("UserToken", a.token);
          localStorage.setItem("User", JSON.stringify(a.user));
          const x = localStorage.getItem("User");
          console.log(JSON.parse(x));
          __this.reloadPage();
        }
      });
    },
  },
  beforeMount() {
    if (localStorage.getItem("User") !== null) {
      window.location.replace("http://localhost:8080/");
    }
  },
};
</script>

<style scoped>
.background {
  background-image: linear-gradient(rgba(0, 0, 0, 0.527), rgba(0, 0, 0, 0.5)),
    url(https://s3.eu-west-2.amazonaws.com/dc-york/images/_1800x875_crop_center-center_90_none/jay-wennington-N_Y88TWmGwA-unsplash_2021-05-26-084422.jpg);
  background-size: cover;
  height: 75vh;
}
.reservation-note {
  margin: 20px auto;
  width: 100%;
  border-radius: 20px;
  background-color: #ededed;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
}

.reservation-note > * {
  width: 100%;
}

.note-title {
  font-family: Oleo Script Swash Caps;
  text-align: center;
  font-size: 200%;
  margin: 20px 0 20px 0;
}
</style>