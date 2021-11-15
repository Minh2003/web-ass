<template>
  <v-card class="mx-5 my-10" width="258" height="370">
    <div>
        <v-img height="208" :src=dish.image />
    </div>
    <div class="dish-container">
        <p class="dish-title">{{dish.name}}</p>
        <p class="dish-description">{{dish.description}}</p>
    </div>
  </v-card>
</template>

<script>
export default {
    name: 'Dish',
    props: {
        dish: Object,
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap');
    .dish-container {
        padding: 2% 6% 0% 6%;
    }
    .dish-title, .dish-description, .dish-price {
        margin: 3px 0px;
    }
    .dish-title {
        font-size: 24px;
        font-family: Oleo Script Swash Caps;
    }
    .dish-description {
        font-size: 14px;
        color: #6a6a6a;
        letter-spacing: 0.5px;
    }
    .dish-price {
        font-weight: bold;
        font-size: 20px;
        letter-spacing: 0.5px;
    }
</style>