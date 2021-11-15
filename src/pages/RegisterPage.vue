<template>
  <v-container fluid>
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
        Hoặc
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import Form from "../components/Form.vue";
import $ from "jquery";
import * as yup from "yup";
// import CustomTitle from "../components/CustomTitle.vue";
export default {
  components: { Form },

  Formname: "regPage",

  data() {
    return {
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
        email: yup
          .string()
          .email()
          .label("Email"),
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

    handleSubmit() {
      console.log(this.formData);
      console.log("submit ne");
      let value = JSON.parse(JSON.stringify(this.formData));
      //   username = value.;
      console.log(value);
      this.register();
    },

    register() {
      console.log(this.formData.username);
      console.log(this.formData.email);
      console.log(this.formData.phone);
      console.log(this.formData.password);

      var settings = {
        url: "http://localhost/auth/register",
        method: "POST",
        timeout: 0,
        data: {
          username: this.formData.username,
          password: this.formData.password,
          verify_password: this.formData.password,
          phoneNumber: this.formData.phone,
          email: this.formData.email,
          avatar: "https://",
        },
        headers: {},
      };

      $.ajax(settings).then(function(response) {
        const a = JSON.parse(response).response;
        console.log("a: ", a);
        // console.log(a.token);
        // console.log(a.user);
        if (localStorage.getItem("UserToken") != "")
          localStorage.removeItem("UserToken");
        if (localStorage.getItem("User") != "") localStorage.removeItem("User");
        localStorage.setItem("UserToken", a.token);
        localStorage.setItem("User", JSON.stringify(a.user));
        const x = localStorage.getItem("User");
        console.log(JSON.parse(x));
      });
    },
  },
};
</script>

<style></style>
