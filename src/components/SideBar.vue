<template>
  <v-navigation-drawer width="30%" permanent>
    <v-list class="sidebar-wrapper">
      <v-list-item
        v-for="([icon, text, link], i) in items"
        :key="i"
        style="[style]"
        :to="{ name: link !== 'logout' ? link : null }"
        @click="
          () => {
            if (link === 'logout') {
              logoutEvent();
            }
          }
        "
      >
        <v-list-item-icon>
          <v-icon>{{ icon }}</v-icon>
        </v-list-item-icon>

        <v-list-item-content>
          <v-list-item-title>{{ text }}</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
export default {
  name: "SideBar",
  data: () => ({
    items: [
      ["mdi-account-outline", "User's Information", "editAccountProfile"],
      ["mdi-lock-outline", "Change Password", "editAccountPassword"],
      ["mdi-logout", "Log Out", "logout"],
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
  margin: 150px 50px 150px 0px;
}
</style>
