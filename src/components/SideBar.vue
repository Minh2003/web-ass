<template>
  <v-navigation-drawer width="30%" permanent>
    <v-list>
      <v-list-item v-for="([icon, text], i) in items" :key="i" link>
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
      ["mdi-account-outline", "User's Information"],
      ["mdi-lock-outline", "Change Password"],
      ["mdi-logout", "Log Out"],
    ],
  }),
};
</script>
