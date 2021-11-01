<template>
  <v-card class="mx-auto my-12" max-width="258">
    <div>
        <v-img height="208" :src=img />
    </div>
    <div class="dish-container">
        <p class="dish-title">{{name}}</p>
        <p class="dish-description">{{description}}</p>
        <p class="dish-price">${{price}}</p>
    </div>
  </v-card>
</template>

<script>
export default {
    name: 'Dish',
    props: {
        name: String,
        description: String,
        price: String,
        img: String,
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap');
    .dish-container {
        padding: 3% 7% 4% 7%;
    }
    .dish-title, .dish-description, .dish-price {
        margin: 5px 0px;
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