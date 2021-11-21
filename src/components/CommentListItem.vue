<template>
  <v-container fluid>
    <v-row align="center">
      <div class="comment" style="width = 70%">
        <v-container fluid>
          <span class="comment_title"> {{ comment.username }} </span>
          <v-lazy>
            <v-textarea
              hide-details
              outlined
              rows="3"
              auto-grow
              style="padding = 0"
              disabled
              :value="comment.description"
            ></v-textarea>
          </v-lazy>
        </v-container>
      </div>
      <v-spacer />
      <div>
        <v-btn
          v-show="userID == comment.user_id || this.manager == 1"
          color="#e1651f"
          @click="DeleteComment"
          class="button"
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
    var managerValue = "0";
    var userValue = null;
    var userID = "";
    if (localStorage.getItem("User") != null) {
      managerValue = JSON.parse(localStorage.getItem("User")).manager;
      userValue = JSON.parse(localStorage.getItem("User"));
      userID = JSON.parse(localStorage.getItem("User")).id;
    }

    return {
      user: userValue,
      manager: managerValue,
      userID: userID,
    };

    // return {
    //   user: JSON.parse(localStorage.getItem("User")),
    // };
  },
  props: {
    comment: Object,
  },
  methods: {
    reloadPage() {
      window.location.reload();
      window.location.replace(
        `http://localhost:8080/blog/${this.$props.comment.blog_id}`
      );
    },

    DeleteComment() {
      const token = localStorage.getItem("UserToken");
      const __this = this;
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

      $.ajax(settings).done(function(response) {
        const a = JSON.parse(response);
        console.log(a);
        __this.reloadPage();
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
  width: 65vw;
}
.buttonText {
  color: white;
}
.comment_title {
  font-weight: 600;
  color: #c7632a;
}
.button {
  width: 100px;
}
@media (max-width: 35em) {
  .comment {
    width: 55vw;
  }
  .button {
    width: 70px;
  }
}
</style>
