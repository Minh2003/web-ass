<template>
  <div class="outer-wrapper">
    <v-navigation-drawer width="60%" permanent>
      <v-list class="sidebar-wrapper">
        <v-list-item
          v-for="([icon, text, link], i) in items"
          :key="i"
          style="[style]"
          :to="{ name: link !== 'logout' ? link : null }"
        >
          <v-list-item-icon>
            <v-icon>{{ icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ text }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
      <div class="logout-button">
        <Button @onClick="logoutEvent" :text="'Log out'" />
      </div>
    </v-navigation-drawer>
  </div>
</template>

<script>
import Button from "../components/Button.vue";
export default {
  name: "SideBar",
  components: { Button },
  data: () => ({
    items: [
      ["mdi-account-outline", "User's Information", "editAccountProfile"],
      ["mdi-lock-outline", "Change Password", "editAccountPassword"],
    ],
    style: {
      backgroundColor: "#efefef",
      marginBottom: "30px",
    },
  }),
  methods: {
    logoutUser() {
      console.log("Logout User");
      if (localStorage.getItem("UserToken") !== "") {
        localStorage.removeItem("UserToken");
      }
      if (localStorage.getItem("User") !== "") {
        localStorage.removeItem("User");
      }
      alert("You are about to logout");
      this.$router.push("/");
    },

    logoutEvent() {
      this.$emit("logoutEvent");
    },
  },
};
</script>

<style scoped>
.sidebar-wrapper {
  margin: 150px 100px 150px 0px;
}

.outer-wrapper {
  width: 40%;
}
.logout-button {
  margin-left: 100px;
  margin-bottom: 100px;
}
</style>
