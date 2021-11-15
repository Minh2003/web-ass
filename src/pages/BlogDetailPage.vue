<template>
  <div v-if="!isLoading" id="blog-detail">
    <v-container>
      <v-layout align-center justify-center>
        <h1>{{ item.blog.title }}</h1>
      </v-layout>
      <v-layout align-center justify-center>
        <v-img
          max-height="30vw"
          max-width="100vw"
          :src="item.blog.image"
        ></v-img>
      </v-layout>
    </v-container>

    <div class="blogContent">
      <h3>WRITTEN ON {{ item.blog.date }}</h3>

      <paragraph :content="item.blog.content"></paragraph>
    </div>

    <div class="reply">
      <h2>Reply</h2>
      <comment :id="item.blog.id" />
      <div v-for="comment in comments" :key="comment.id">
        <comment-list-item :comment="comment" />
      </div>
    </div>
  </div>
</template>

<script>
import Comment from "../components/Comment.vue";
import Paragraph from "../components/Paragraph.vue";
import $ from "jquery";
import CommentListItem from "../components/CommentListItem.vue";
export default {
  components: { Paragraph, Comment, CommentListItem },
  name: "blogDetail",
  data() {
    return {
      isLoading: false,
      formData: {
        // Vue Object Data will be convert into Observer
      },
      item: [],
      comments: [],
      numBlog: this.$route.params.id,
    };
  },

  methods: {
    GetBlogData() {
      var settings = {
        url: `${process.env.VUE_APP_API_URL}/blog/{${this.numBlog}}`,
        method: "GET",
        timeout: 0,
        data: {},
        headers: {},
      };

      $.ajax(settings).then((response) => {
        this.isLoading = false;
        //console.log(response);
        const a = JSON.parse(response).response;
        this.item = a;
        //console.log(this.item);
        this.comments = this.item.comments;
        //console.log(this.comments);
      });
    },
  },
  beforeMount() {
    this.isLoading = true;
    //console.log(this.$route.params);
    this.GetBlogData();
  },
};
</script>

<style scoped>
.blogContent {
  padding: 5vw;
}
.reply {
  padding: 0vw 5vw 5vw 5vw;
}
</style>
