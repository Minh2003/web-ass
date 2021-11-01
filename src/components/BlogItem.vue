<template>
  <v-card :to="'/'" class="mx-auto my-12" max-width="311">
    <div>
        <v-img height="208" :src=img />
    </div>
    <p class="dish-title">{{name}}</p>    
  </v-card>
</template>

<script>
export default {
    name: 'BlogItem',
    props: {
        name: String,
        img: String,
    }
}
</script>

<style scoped>
    .dish-title {
        font-size: 22px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 500;
        text-align: center;
        padding: 5% 8% 6% 8%;
    }
</style>