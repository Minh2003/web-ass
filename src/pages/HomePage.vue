<template>
  <div>
    <div id="home-page">
      Home Page
    </div>
    <div>
      <Button text="Create Account" :width="'351px'" :height="'40px'"/>
      <Button text="Confirm" :width="'100px'" :height="'40px'"/>
      <Button text="Cancel" :width="'100px'" :height="'40px'"/>
      <Button text="Edit" :width="'96px'" :height="'27px'"/>
      <Button text="Delete" :width="'96px'" :height="'27px'"/>
      <Button text="Send" :width="'100px'" :height="'64px'"/>
      <Button text="Add Product" :width="'222px'" :height="'51px'"/>
      <Button text="Book My Table" :width="'169px'" :height="'53px'"/>
      <Button text="Add New Picture" :width="'343px'" :height="'64px'"/>
      <Button text="Login" :width="'257px'" :height="'64px'"/>
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