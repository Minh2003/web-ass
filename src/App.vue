<template>
  <div id="app">
    <v-app>
      <Header />
      <router-view />
      <Footer />
    </v-app>
  </div>
</template>

<script>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
//import HomePage from './pages/HomePage.vue'
export default {
  name: "App",
  components: {
    Header,
    Footer,
  },
};
</script>
  
<style>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap');
</style>
