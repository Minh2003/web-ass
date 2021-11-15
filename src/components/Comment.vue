<template>
  <v-container fluid>
    <v-row align="center">
      <v-spacer />
      <v-spacer />
      <v-spacer />
      <div>
        <v-avatar size="70">
          <img src="https://cdn.vuetifyjs.com/images/john.jpg" alt="John" />
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
              v-model="commentData"
            ></v-textarea>
          </v-lazy>
        </v-container>
      </div>
      <v-spacer />
      <div>
        <v-btn color="#e1651f" @click="PostComment">
          <div class="buttonText">Send</div>
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
  name: "comment",
  props: {
    id: {
      type: String,
      default: "",
    },
  },
  data() {
    return {
      commentData: "",
      userToken: localStorage.getItem("UserToken"),
      userID: JSON.parse(localStorage.getItem("User")).id,
    };
  },

  methods: {
    test() {
      console.log("hello");
    },

    PostComment() {
      console.log("comment ne");
      console.log(this.commentData);

      var settings = {
        url: `${process.env.VUE_APP_API_URL}/comment/create`,
        method: "POST",
        timeout: 0,
        data: {
          blogId: this.id,
          description: this.commentData,
          userId: "",
        },
        headers: {
          "Bear-Token": this.userToken,
        },
      };

      $.ajax(settings).then((response) => {
        this.isLoading = false;
        console.log(response);
        const a = JSON.parse(response).response;
        this.item = a;
        console.log(this.item);
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
