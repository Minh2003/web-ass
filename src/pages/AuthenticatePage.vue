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
              :errorMessages="errorMessages"
              @onFormChange="handleFormChange"
              @onSubmit="handleSubmit"
            />
          </v-col>
        </v-layout>
        <v-layout align-center justify-center>
          Hoặc
          <v-btn text color="#e1651f" to="/reg">
            <span class="linkText">Đăng ký</span>
          </v-btn>
        </v-layout>
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

  Formname: "authPage",

  data() {
    return {
      token: "",
      formData: {
        username: "",
        password: "",
      },
      errorMessages: {
        username: "",
        password: "",
      },
      schema: yup.object().shape({
        email: yup.string().email().label("Email"),
        phone: yup
          .string()
          .matches(/^[0-9]{10}$/, "Phone number must be 10 digits"),
        date: yup
          .string()
          .matches(
            /([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/,
            "Date must be of YYYY-MM-DD"
          ),
        time: yup
          .string()
          .matches(
            /(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)/gm,
            "Time must be of HH:MM:SS"
          ),
        totalPeople: yup.number().min(1).max(30).label("Number of persons"),
      }),
    };
  },

  methods: {
    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
      this.handleInputValidation(newData);
    },

    handleSubmit() {
      //console.log(this.formData);
      //console.log("submit ne");
      //   let value = JSON.parse(JSON.stringify(this.formData));
      //   username = value.;
      this.Login();
    },

    async handleInputValidation({ name, value }) {
      let validationResult = await this.schema
        .validate({ [name]: value })
        .catch((error) => {
          return error;
        });
      if (validationResult.errors) {
        //console.log(validationResult.errors[0]);
        this.errorMessages[name] = validationResult.errors[0];
      } else {
        this.errorMessages[name] = "";
      }
    },

    Login() {
      var settings = {
        url: `${process.env.VUE_APP_API_URL}/auth/login`,
        method: "POST",
        timeout: 0,
        data: {
          username: this.formData.username,
          password: this.formData.password,
        },
        headers: {},
      };

      $.ajax(settings).done(function (response) {
        const a = JSON.parse(response).response;
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
