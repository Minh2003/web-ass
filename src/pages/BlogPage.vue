<template>
  <div class="d-flex flex-wrap justify-center">
    <div v-for="blog in blogs" :key="blog.id">
      <blog-item :blog="blog" />
    </div>
  </div>
</template>

<script>
import $ from "jquery";
import BlogItem from "../components/BlogItem.vue";
export default {
  name: "BlogPage",
  components: {
    BlogItem,
  },
  data() {
    return {
      blogs: [],
    };
  },
  methods: {
    getBlog() {
      const __this = this;
      var settings = {
        url: `${process.env.VUE_APP_API_URL}/blogs`,
        method: "GET",
        timeout: 0,
      };

      $.ajax(settings).done(function (response) {
        const a = JSON.parse(response).response;
        //console.log(response);
        __this.blogs = a;
      });
    },
  },
  beforeMount() {
    this.getBlog();
  },
};
</script>

<style scoped>
</style>
