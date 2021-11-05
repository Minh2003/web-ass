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
      @onFormChange="handleFormChange"
      @onSubmit="handleSubmit"
    /> -->

    <!-- <div style="width: 30%; margin: auto;">
      <Form
        :type="'Register'"
        :data="formData"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 80%; margin: auto;">
      <Form
        :type="'EditAccount'"
        :data="formData"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 30%; margin: auto;">
      <Form
        :type="'EditPassword'"
        :data="formData"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 50%; margin: auto;">
      <Form
        :type="'EditDish'"
        :data="formData"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <!-- <div style="width: 50%; margin: auto;">
      <Form
        :type="'EditBlog'"
        :data="formData"
        @onFormChange="handleFormChange"
        @onSubmit="handleSubmit"
      />
    </div> -->

    <div style="width: 30%; margin: auto;">
      <Form
        :type="'Reservation'"
        :data="formData"
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
    };
  },
  methods: {
    onPageChange(page) {
      this.currentPage = page;
    },

    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
    },

    handleSubmit() {
      console.log(this.formData);
    },
  },
};
</script>
