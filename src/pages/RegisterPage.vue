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
      console.log(this.formData.username);
      this.register();
    },

    register() {
      console.log(this.formData.username);
      console.log(this.formData.email);
      console.log(this.formData.phone);
      console.log(this.formData.password);
      const __this = this;
      var settings = {
        url: "http://localhost/auth/register",
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

      $.ajax(settings).done(function(response) {
        const a = JSON.parse(response).response;
        console.log(response);
        __this.item = a;
        console.log(this.item);
      });
    },
  },
};
</script>

<style></style>
