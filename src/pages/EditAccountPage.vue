<template>
  <div class="edit-account-page-wrapper">
    <SideBar />
    <div class="update-form-wrapper">
      <div style="width: 80%; margin: auto;">
        <router-view
          :key="$route.path"
          :data="formData"
          @onFormChange="handleFormChange"
          @onSubmit="handleSubmit"
          :errorMessages="errorMessages"
        />
      </div>
    </div>
  </div>
</template>

<script>
import SideBar from "../components/SideBar.vue";
import * as yup from "yup";

export default {
  name: "EditAccountPage",
  components: { SideBar },
  props: {},
  data() {
    return {
      formType: {
        type: String,
        default: "",
      },
      formData: {
        // Vue Object Data will be convert into Observer
        username: "",
        email: "",
        phone: "",
        password: "",
        newPassword: "",
        confirmNewPassword: "",
      },
      errorMessages: {
        // Vue Object Data will be convert into Observer
        username: "",
        email: "",
        phone: "",
        password: "",
        newPassword: "",
        confirmNewPassword: "",
      },
      schema: yup.object().shape({
        fullname: yup
          .string()
          .required()
          .label("Your name"),
        email: yup
          .string()
          .email()
          .label("Email"),
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
        totalPeople: yup
          .number()
          .min(1)
          .max(30)
          .label("Number of persons"),
      }),
    };
  },
  methods: {
    async handleInputValidation({ name, value }) {
      let validationResult = await this.schema
        .validate({ [name]: value })
        .catch((error) => {
          return error;
        });
      if (validationResult.errors) {
        console.log(validationResult.errors[0]);
        this.errorMessages[name] = validationResult.errors[0];
      } else {
        this.errorMessages[name] = "";
      }
    },

    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
      console.log("Form Changed");
      this.handleInputValidation(newData);
    },

    handleSubmit() {
      if (this.$route.name === "editAccountProfile") {
        console.log("Submit edit profile");
      } else if (this.$route.name === "editAccountPassword") {
        console.log("Submit to edit password");
      }
      console.log(this.formData);
    },
  },
};
</script>

<style>
.edit-account-page-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.edit-options-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 30%;
}

.update-form-wrapper {
  margin: 100px 0 100px 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 50%;
}

.option-item {
  margin: 20px 0 20px 0;
  background: rgba(225, 101, 31, 0.25);
  width: 100%;
  height: 50px;
  border-radius: 5px;
}
</style>
