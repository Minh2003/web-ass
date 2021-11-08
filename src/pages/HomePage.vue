<template>
  <div>
    home page ne
    <v-btn @click="test"> Button nè </v-btn>

    <comment />
  </div>
</template>

<script>
import Comment from "../components/Comment.vue";
import $ from "jquery";
export default {
  components: { Comment },
  name: "HomePage",
  methods: {
    test() {
      var settings = {
        url: "http://localhost/admin/delete_comment/{11}",
        method: "POST",
        timeout: 0,
        data: {
          name: "Assignment2",
          description: "description",
          image: "https:?/",
          title: "new title blog ne",
          content: "content",
          NoP: 12,
          date: "2021-12-12",
          time: "12:00:01",
          username: "test2",
          password: "12345678",
          phoneNumber: "1234567890",
          email: "minh1234@example.com",
          avatar: "https://",
          blogId: 18,
          old_password: "123456789",
          new_password: "12345678",
          verify_password: "12345678",
        },
        headers: {
          // "Bear-Token":
          //   "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6InRlc3QyIiwiaWQiOiIzIiwibWFuYWdlciI6IjAiLCJleHAiOjE2Mzg5MzUxOTh9.TyL3aIBRbAa-Jb6B_igQP1-J5zJmB4cQCKCmcn3327U",
          "Bear-Token":
            "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VybmFtZSI6Ik1pbmgxMjM0NTY3IiwiaWQiOiIxIiwibWFuYWdlciI6IjEiLCJleHAiOjE2Mzg5MzQwMTd9.YX49-cO4x4gIReoLEYNG8VDmQtTKChY8h9G7Vb7vXxU",
        },
      };

      $.ajax(settings).done(function (response) {
        console.log(response);
      });
    },
  },
};
</script>
