<template>
  <div id="blog-detail">
    <v-container>
      <v-layout align-center justify-center>
        <h1>The coolest ways to prepare for your dinner</h1>
      </v-layout>
      <v-layout align-center justify-center>
        <v-img
          lazy-src="https://picsum.photos/id/11/10/6"
          max-height="30vw"
          max-width="100vw"
          src="https://vistapointe.net/images/feast-wallpaper-4.jpg"
        ></v-img>
      </v-layout>
    </v-container>

    <div class="blogContent">
      <h3>WRITTEN ON 15/10/2021</h3>

      <paragraph
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae est tempus, aliquet tortor a, pharetra nibh. Morbi commodo sagittis nibh at tempus. Duis ultricies viverra ex sit amet suscipit. Vivamus sagittis blandit orci, nec pretium enim aliquet sed. Curabitur in augue non diam rutrum ullamcorper. Sed sed elit et ex bibendum dignissim in et tellus. In suscipit venenatis dolor, et commodo lectus. Sed erat nisl, semper nec lectus eget, condimentum efficitur nunc. Aliquam erat volutpat. Cras posuere blandit enim, vitae scelerisque nunc rhoncus ultricies. Praesent at ante ut eros aliquet cursus eget et lectus. Sed placerat viverra augue eget lobortis. Quisque dui nisl, placerat non mi eu, fermentum consequat erat.

Etiam et convallis sem. Donec elementum id elit nec laoreet. Phasellus velit arcu, luctus in ligula in, accumsan sollicitudin ante. In imperdiet orci laoreet erat suscipit, et porta lacus volutpat. Ut ac purus ac tortor fermentum molestie ac vel sem. Fusce laoreet interdum tortor, ac molestie nunc ultricies vel. Phasellus quis eros pulvinar, rhoncus justo at, vehicula urna. Nunc venenatis sem sit amet felis tempus, quis molestie nunc ultricies. Integer neque nisl, bibendum non consequat at, venenatis a elit.

Mauris congue eget augue sit amet dictum. Phasellus ac elementum tortor, tempor congue nulla. Nulla facilisi. Suspendisse vitae ex a lorem posuere efficitur dictum vel risus. Integer vulputate ante nec felis volutpat ornare. Nunc accumsan mauris dolor, vel bibendum enim auctor sit amet. Etiam a nisl et metus interdum malesuada. Cras auctor, velit eu blandit bibendum, ipsum urna tincidunt lorem, blandit volutpat sapien nisl at massa. Sed porttitor, elit et euismod congue, massa dolor imperdiet nunc, in varius mi lectus ut turpis.

Vestibulum luctus, est vel dapibus dapibus, ex mi ullamcorper lacus, vestibulum commodo neque diam vel leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec eros arcu, facilisis ac ipsum sollicitudin, varius vestibulum urna. Vestibulum feugiat vehicula quam sed feugiat. Vestibulum quis magna odio. Phasellus nec ultricies ante. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In sollicitudin lacus in elit ultricies, id finibus erat fringilla.

Integer placerat lacus mi, eu fringilla turpis dignissim sed. Maecenas sodales laoreet bibendum. Etiam quis lacus non nunc facilisis fringilla sed faucibus augue. Donec magna mauris, convallis eget massa eget, lobortis efficitur nulla. Quisque elementum eu nunc ut tempus. Cras maximus odio pellentesque malesuada accumsan. Curabitur blandit laoreet nisl eu placerat."
      ></paragraph>
    </div>

    

    <div class="reply">
      <h2>Reply</h2>
      <comment />
    </div>
  </div>
</template>

<script>
import Comment from "../components/Comment.vue";
import Paragraph from "../components/Paragraph.vue";
export default {
  components: { Paragraph, Comment },
  name: "blogDetail",
  props: {
    title: String,
    image: String,
    content: String,
    date: Date,
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
