<template>
  <div class="edit-account-page-wrapper">
    <SideBar />
    <div class="update-form-wrapper">
      <router-view :key="$route.path" />
      <!-- Pass data to router-view ? -->
      <div style="width: 80%; margin: auto;">
        <Form
          :type="'EditAccount'"
          :data="formData"
          @onFormChange="handleFormChange"
          @onSubmit="handleSubmit"
        />
      </div>
    </div>
  </div>
</template>

<script>
import Form from "../components/Form.vue";
import SideBar from "../components/SideBar.vue";

export default {
  name: "EditAccountPage",
  components: { Form, SideBar },
  props: {},
  data() {
    return {
      formType: {
        type: String,
        default: "",
      },
      formData: {
        // Vue Object Data will be convert into Observer
        username: "abc",
        email: "abc@gmail.com",
        phone: "123",
        password: "",
        newPassword: "",
        confirmNewPassword: "",
      },
    };
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
