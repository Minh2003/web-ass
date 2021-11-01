<template>
  <v-card class="mx-auto" max-width="374">
    <div class="service-container">
        <div class="service-icon">
            <v-icon x-large>{{icon_name}}</v-icon>
        </div>
        <p class="service-title">{{title}}</p>
        <p class="service-description">{{description}}</p>
    </div>
  </v-card>
</template>

<script>
export default {
    name: 'Service',
    props: {
        icon_name: String,
        title: String,
        description: String,
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap');
    .service-container {
        padding: 2% 4%;
    }
    .service-icon {
        padding: 5% 45%;
    }
    .service-description, .service-title {
        text-align: center;
    }
    .service-title {
        font-size: 24px;
        font-family: Oleo Script Swash Caps;
    }
</style>