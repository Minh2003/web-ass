<template>
  <div>
    <div id="home-page">
      <h1>Demo Components</h1>
    </div>

    <br />
    <br />
    <!-- <Form
      :type="'Login'"
      :data="formData"
      :errorMessages="errorMessages"
      @onFormChange="handleFormChange"
      @onSubmit="handleSubmit"
    /> -->

    <!-- <div style="width: 30%; margin: auto;">
      <Form
        :type="'Register'"
        :data="formData"
        :errorMessages="errorMessages"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 80%; margin: auto;">
      <Form
        :type="'EditAccount'"
        :data="formData"
        :errorMessages="errorMessages"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 30%; margin: auto;">
      <Form
        :type="'EditPassword'"
        :data="formData"
        :errorMessages="errorMessages"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 50%; margin: auto;">
      <Form
        :type="'EditDish'"
        :data="formData"
        :errorMessages="errorMessages"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 50%; margin: auto;">
      <Form
        :type="'EditBlog'"
        :data="formData"
        :errorMessages="errorMessages"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <div style="width: 80%; margin: auto">
      <Form
        :type="'Reservation'"
        :data="formData"
        :errorMessages="errorMessages"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div>

    <br /><br />

    <div>
      <Pagination
        :totalPages="10"
        :perPage="10"
        :maxVisibleButtons="3"
        :currentPage="currentPage"
        @pagechanged="onPageChange"
      />
    </div>
  </div>
</template>

<script>
import Pagination from "../components/Pagination.vue";
import Form from "../components/Form.vue";
import * as yup from "yup";

export default {
  name: "DemoComponent",
  components: {
    Pagination,
    Form,
  },
  data() {
    return {
      currentPage: 1,
      formData: {
        // Vue Object Data will be convert into Observer
        fullname: "",
        totalPeople: "",
        date: "",
        time: "",
        message: "",
        confirmPassword: "",
        dishId: "F123",
        dishTitle: "Meatball",
        dishDescription: "Super Delicious",
        blogTitle: "Yomosh",
        blogContent: "Oh Yeah",
        username: "",
        email: "",
        phone: "",
        password: "",
        newPassword: "",
        confirmNewPassword: "",
      },

      errorMessages: {
        fullname: "",
        totalPeople: "",
        date: "",
        time: "",
        message: "",
        confirmPassword: "",
        dishId: "",
        dishTitle: "",
        dishDescription: "",
        blogTitle: "",
        blogContent: "",
        username: "",
        email: "",
        phone: "",
        password: "",
        newPassword: "",
        confirmNewPassword: "",
      },

      // Add field with name in errorMessages for others' validation
      schema: yup.object().shape({
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
    onPageChange(page) {
      this.currentPage = page;
    },

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
      console.log(this.formData);
    },
  },
};
</script>
