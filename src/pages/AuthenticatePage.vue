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
              :type="'Login'"
              :data="formData"
              @onFormChange="handleFormChange"
              @onSubmit="handleSubmit"
            />
          </v-col>
        </v-layout>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import Form from "../components/Form.vue";
import $ from "jquery";
// import CustomTitle from "../components/CustomTitle.vue";
export default {
  components: { Form },

  Formname: "authPage",

  data() {
    return {
      token: "",
      formData: {
        username: "",
        password: "",
      },
    };
  },

  methods: {
    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
    },

    handleSubmit() {
      console.log(this.formData);
      console.log("submit ne");
      //   let value = JSON.parse(JSON.stringify(this.formData));
      //   username = value.;
      this.Login();
    },

    Login() {
      var settings = {
        url: "http://localhost/auth/login",
        method: "POST",
        timeout: 0,
        data: {
          username: this.formData.username,
          password: this.formData.password,
        },
        headers: {
          // 'Bear-Token': "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6InVzZXIgdGVzdCIsImlkIjoiMyIsIm1hbmFnZXIiOiIwIiwiZXhwIjoxNjM4Nzg0MDgwfQ.SdI1UcaMYVi0L6d22XTLqdsSq7dN3L7hvGJcA_EQdZE"
          "Bear-Token":
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Ik1pbmgxMjM0IiwiaWQiOiIxIiwibWFuYWdlciI6IjEiLCJleHAiOjE2Mzg3ODM2OTl9.soqY1yTq7RLTZYaFn9Yul_BeB4FOycmCba6Bl3Dj9jY",
        },
      };

      $.ajax(settings).done(function (response) {
        const a = JSON.parse(response).response;
        console.log(a.token);
        localStorage.setItem("UserToken", a.token);
      });
    },
  },
};
</script>

<style></style>
