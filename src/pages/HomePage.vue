<template>
  <div>
    home page ne
    <button @click="test">Click me</button>
    <ul>
      <li v-for="i in item" :key="i.id">
        {{ i.title }}
      </li>
    </ul>
    {{ item }}
  </div>
</template>

<script>
// import Comment from "../components/Comment.vue";

import $ from "jquery";

export default {
  // components: { Comment },
  name: "HomePage",
  data() {
    return {
      formData: {
        // Vue Object Data will be convert into Observer
      },
      item: [],
    };
  },
  methods: {
    test() {
      const __this = this;
      var settings = {
        url: "http://localhost/blogs",
        method: "get",
        timeout: 0,
        data: {
          name: "Assignment",
          description: "description",
          image: "https:?/",
          title: "new title blog",
          content: "content",
          // NoP: 12,
          // date: "2021-12-12",
          // time: "12:00:01",
          username: "Minh1234",
          password: "123456789",
          phoneNumber: "1234567890",
          email: "minh1234@example.com",
          avatar: "https://",
          // blogId: 2,
          old_password: "1234567890",
          new_password: "12345678",
          verify_password: "12345678",
        },
        headers: {
          // 'Bear-Token': "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6InVzZXIgdGVzdCIsImlkIjoiMyIsIm1hbmFnZXIiOiIwIiwiZXhwIjoxNjM4Nzg0MDgwfQ.SdI1UcaMYVi0L6d22XTLqdsSq7dN3L7hvGJcA_EQdZE"
          "Bear-Token":
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Ik1pbmgxMjM0IiwiaWQiOiIxIiwibWFuYWdlciI6IjEiLCJleHAiOjE2Mzg3ODM2OTl9.soqY1yTq7RLTZYaFn9Yul_BeB4FOycmCba6Bl3Dj9jY",
        },
      };

      $.ajax(settings).done(function (response) {
        const a = JSON.parse(response).response;
        __this.item = a;
        console.log(this.item);
      });
    },
  },
};
</script>
