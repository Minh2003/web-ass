<template>
  <v-container fluid>
    <v-row align="center">
      <v-spacer />
      <v-spacer />
      <v-spacer />
      <div>
        <v-avatar size="70">
          <img :src="this.user.avatar" :alt="this.user.username" />
        </v-avatar>
      </div>
      <v-spacer />
      <div class="comment">
        <v-container fluid>
          <v-lazy>
            <v-textarea
              hide-details
              outlined
              rows="3"
              auto-grow
              style="padding = 0"
              placeholder="Say something"
              disabled
              :value="comment.description"
            ></v-textarea>
          </v-lazy>
        </v-container>
      </div>
      <v-spacer />
      <div>
        <v-btn
          v-show="user.id == comment.user_id || user.manager == 1"
          color="#e1651f"
          @click="DeleteComment"
        >
          <div class="buttonText">Delete</div>
        </v-btn>
      </div>
      <v-spacer />
      <v-spacer />
      <v-spacer />
    </v-row>
  </v-container>
</template>

<script>
import $ from "jquery";
export default {
  name: "commentListItem",
  data() {
    return {
      user: JSON.parse(localStorage.getItem("User")),
    };
  },
  props: {
    comment: Object,
  },
  methods: {
    DeleteComment() {
      const token = localStorage.getItem("UserToken");
      console.log(token);
      var settings = {
        url: `${process.env.VUE_APP_API_URL}/comment/delete/{${this.$props.comment.id}}`,
        method: "POST",
        timeout: 0,
        data: {
          blogId: this.$props.comment.blog_id,
        },
        headers: {
          "Bear-Token": token,
        },
      };

      $.ajax(settings).done(function (response) {
        const a = JSON.parse(response);
        console.log(a);
        // console.log(a.token);
        // console.log(a.user);
        // if (localStorage.getItem("UserToken") != "")
        //   localStorage.removeItem("UserToken");
        // if (localStorage.getItem("User") != "") localStorage.removeItem("User");
        // localStorage.setItem("UserToken", a.token);
        // localStorage.setItem("User", JSON.stringify(a.user));
        // const x = localStorage.getItem("User");
        // console.log(JSON.parse(x));
      });
    },
  },
};
</script>

<style scoped>
.comment {
  width: 75vw;
}
.buttonText {
  color: white;
}
</style>