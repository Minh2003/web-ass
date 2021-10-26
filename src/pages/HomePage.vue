<template>
  <div>
    <div id="home-page">
      Home Page
    </div>
    <div style="display: flex">
      <Button text="Create Account" :width="'351px'" :height="'40px'"/>
      <Button text="Confirm" :width="'100px'" :height="'40px'"/>
      <Button text="Cancel" :width="'100px'" :height="'40px'"/>
      <Button text="Edit" :width="'96px'" :height="'27px'"/>
      <Button text="Delete" :width="'96px'" :height="'27px'"/>
      <Button text="Send" :width="'100px'" :height="'64px'"/>
    </div>
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