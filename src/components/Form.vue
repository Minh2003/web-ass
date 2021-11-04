<template>
  <div v-if="type === 'Login'">
    <v-form class="d-flex flex-wrap justify-center">
      <FormField
        @onInputChange="handleFormChange($event, 'email')"
        ref="email"
        name="email"
        :value="data.email"
        type="EmailIcon"
        :label="'Email'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'password')"
        ref="password"
        name="password"
        :value="data.password"
        type="PasswordIcon"
        :label="'Password'"
      />
      <Button
        @onClick="handleSumbit"
        text="Confirm"
        width="257px"
        height="64px"
      />
    </v-form>
  </div>

  <div v-else-if="type === 'Register'">
    <v-form class="d-flex flex-wrap justify-center">
      <FormField
        @onInputChange="handleFormChange($event, 'username')"
        name="username"
        :value="data.username"
        type="UsernameIcon"
        :label="'Username'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'phone')"
        name="phone"
        :value="data.phone"
        type="PhoneIcon"
        :label="'Phone'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'email')"
        name="email"
        :value="data.email"
        type="EmailIcon"
        :label="'Email'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'password')"
        name="password"
        :value="data.password"
        type="PasswordIcon"
        :label="'Password'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'confirmPassword')"
        name="confirmPassword"
        :value="data.confirmPassword"
        type="PasswordIcon"
        :label="'Confirm Password'"
      />
      <Button
        @onClick="handleSumbit"
        text="Confirm"
        width="257px"
        height="64px"
      />
    </v-form>
  </div>

  <div v-else-if="type === 'EditAccount'">
    <v-form class="d-flex flex-wrap justify-center">
      <ControlField
        @onInputChange="handleFormChange($event, 'username')"
        type="AccountEdit"
        label="Name"
        width="100%"
        rows="2"
        :value="data.username"
      />
      <ControlField
        @onInputChange="handleFormChange($event, 'phone')"
        type="AccountEdit"
        label="Phone"
        width="100%"
        rows="2"
        :value="data.phone"
      />
      <ControlField
        @onInputChange="handleFormChange($event, 'email')"
        type="AccountEdit"
        label="Email"
        width="100%"
        rows="2"
        :value="data.email"
      />
      <Button
        @onClick="handleSumbit"
        text="Confirm"
        width="257px"
        height="64px"
      />
    </v-form>
  </div>

  <div v-else-if="type === 'EditPassword'">
    <v-form class="d-flex flex-wrap justify-center">
      <FormField
        @onInputChange="handleFormChange($event, 'password')"
        name="password"
        :value="data.password"
        type="PasswordNoLabel"
        :label="'Old Password'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'newPassword')"
        name="newPassword"
        :value="data.newPassword"
        type="PasswordNoLabel"
        :label="'New Password'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'confirmNewPassword')"
        name="password"
        :value="data.confirmNewPassword"
        type="PasswordNoLabel"
        :label="'Confirm New Password'"
      />
      <Button
        @onClick="handleSumbit"
        text="Confirm"
        width="257px"
        height="64px"
      />
    </v-form>
  </div>

  <div v-else-if="type === 'EditDish'">
    <v-form class="d-flex flex-wrap justify-center">
      <ControlField
        @onInputChange="handleFormChange($event, 'dishId')"
        type="DishTitle"
        label="Dish Id"
        width="100%"
        rows="2"
        :value="data.dishId"
      />
      <ControlField
        @onInputChange="handleFormChange($event, 'dishTitle')"
        type="DishTitle"
        label="Dish Title"
        width="100%"
        rows="2"
        :value="data.dishTitle"
      />
      <ControlField
        @onInputChange="handleFormChange($event, 'dishDescription')"
        type="DishDescription"
        label="Dish Description"
        width="100%"
        rows="2"
        :value="data.dishDescription"
      />
      <Button
        @onClick="handleSumbit"
        text="Confirm"
        width="257px"
        height="64px"
      />
    </v-form>
  </div>

  <div v-else-if="type === 'EditBlog'">
    <v-form class="d-flex flex-wrap justify-center">
      <ControlField
        @onInputChange="handleFormChange($event, 'blogTitle')"
        type="BlogTitle"
        label="Blog Title"
        width="100%"
        rows="3"
        :value="data.blogTitle"
      />
      <ControlField
        @onInputChange="handleFormChange($event, 'blogContent')"
        type="BlogContent"
        label="Blog Content"
        width="100%"
        rows="30"
        :value="data.blogContent"
      />
      <Button
        @onClick="handleSumbit"
        text="Confirm"
        width="257px"
        height="64px"
      />
    </v-form>
  </div>

  <div v-else-if="type === 'Reservation'">
    <v-form class="d-flex flex-wrap justify-center">
      <FormField
        @onInputChange="handleFormChange($event, 'fullname')"
        name="username"
        :value="data.fullname"
        type="NoIcon"
        :label="'Your Name'"
      />
      <FormField
        @onInputChange="handleFormChange($event, 'email')"
        name="email"
        :value="data.email"
        type="NoIcon"
        :label="'Your Email'"
      />
      <div style="width: 100%" :style="pairInputStyle">
        <FormField
          @onInputChange="handleFormChange($event, 'phone')"
          name="phone"
          :value="data.phone"
          type="NoIcon"
          :label="'Your Phone Number'"
          :width="'45%'"
          class="justify-space-between"
        />
        <FormField
          @onInputChange="handleFormChange($event, 'totalPeople')"
          name="phone"
          :value="data.totalPeople"
          type="NoIcon"
          :label="'Number Of Persons'"
          :width="'45%'"
          class="justify-space-between"
        />
      </div>
      <div style="width: 100%" :style="pairInputStyle">
        <FormField
          @onInputChange="handleFormChange($event, 'date')"
          name="date"
          :value="data.date"
          type="NoIcon"
          :width="'45%'"
          :label="'Date'"
        />
        <FormField
          @onInputChange="handleFormChange($event, 'time')"
          name="time"
          :value="data.time"
          type="NoIcon"
          :width="'45%'"
          :label="'Time'"
        />
      </div>
      <FormField
        @onInputChange="handleFormChange($event, 'message')"
        name="message"
        :value="data.message"
        type="NoIconMessage"
        :label="'Your Messages'"
      />
      <Button
        @onClick="handleSumbit"
        text="Book Your Table"
        width="207px"
        height="53px"
      />
    </v-form>
  </div>
</template>

<script>
import FormField from "./FormField.vue";
import ControlField from "./ControlField.vue";
import Button from "./Button.vue";

export default {
  name: "Form",
  components: { FormField, Button, ControlField },
  props: {
    data: {
      type: Object,
    },
    type: {
      type: String,
      default: "",
    },
  },

  methods: {
    handleFormChange(data, name) {
      // console.log("Form receive data change: ", data, name);
      this.$emit("onFormChange", {
        name: name,
        value: data,
      });
    },

    handleSumbit() {
      console.log("Button Click");
      this.$emit("onSubmit");
    },
  },

  data() {
    return {
      pairInputStyle: {
        display: "flex",
        flexWrap: "wrap",
        justifyContent: "space-between",
      },
    };
  },
};
</script>

<style></style>
