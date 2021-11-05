<template>
  <div>
    home page ne
    <comment />
  </div>
</template>

<script>
import Comment from "../components/Comment.vue";
export default {
  components: { Comment },
  name: "HomePage",
  data() {
    return {
      formData: {
        // Vue Object Data will be convert into Observer
      
      },
    };
  },
  methods: {
    handleFormChange(newData) {
      this.formData[newData.name] = newData.value;
    },

    handleSubmit() {
      console.log(this.formData);
    },
  },
};
</script>
