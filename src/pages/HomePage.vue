<template>
  <div>
    <div id="home-page">
      Home Page
    </div>
    <Button text="Đăng nhập"/>
    <Button text="Đăng ký"/>
    <Button text="Ciao"/>
  </div>
</template>

<script>
import Button from '../components/Button.vue'

export default {
  name: 'homePage',
  components: {
    Button
  }
}
</script>

<style>

</style>