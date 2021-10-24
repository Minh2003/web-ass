<template>
    <div v-if="text == 'Đăng nhập' || text == 'Đăng ký'">
      <button class="btn1">{{text}}</button>
    </div>
    <div v-else-if="text == 'Hola'">
      <button class="btn2">{{text}}</button>
    </div>
    <div v-else-if="text == 'Ciao'">
      <button class="btn3">{{text}}</button>
    </div>
</template>

<script>
export default {
    name: 'Button',
    props: {
        text: String,
    }
}
</script>

<style>
    .btn1 {
        background-color: #e1651f;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .btn2 {
        background: black;
        color: white;
    }

    .btn3 {
        background: blue;
        color: white;
    }
</style>