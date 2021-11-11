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
        />
      </div>
    </div>
  </div>
</template>

<script>
import SideBar from "../components/SideBar.vue";

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
    };
  },
  methods: {
    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
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
