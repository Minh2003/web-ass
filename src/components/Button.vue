<template>
    <div v-if="text == 'Confirm'">
      <button 
        class="btn btn-confirm" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else-if="text == 'Cancel'">
      <button 
        class="btn btn-cancel" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else-if="text == 'Edit'">
      <button 
        class="btn btn-edit" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else-if="text == 'Delete'">
      <button 
        class="btn btn-delete" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else-if="text == 'Create Account'">
      <button 
        class="btn btn-createAcc" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else-if="text == 'Add Product'">
      <button 
        class="btn btn-add" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else-if="text == 'Book Your Table' || text == 'Book My Table' || text == 'Explore More'">
      <button 
        class="btn btn-book" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>

    <div v-else>
      <button 
        class="btn" 
        :style="{ width: width, height: height }"
      >{{text}}</button>
    </div>
</template>

<script>
export default {
    name: 'Button',
    props: {
        text: String,
        width: String,
        height: String
    }
}
</script>

<style>
    .btn {
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        cursor: pointer;
        font-weight: 500;
        letter-spacing: 0.5px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        background-color: #e1651f;
        border-radius: 5px;
    }
    .btn:hover {
        transition: all .3s ease-in-out;
        background-color: rgb(231, 120, 56);
        box-shadow: 0px 5px 5px rgba(236, 129, 40, 0.24);
    }
    .btn-confirm, .btn-cancel {
        border-radius: 6px;
        box-shadow: 0px 0px 0px;
    }
    .btn-cancel {
        color: #c4c4c4;
        background-color: white;
        border: 1px solid #c4c4c4;
    }
    .btn-cancel:hover {
        transition: all .3s ease-out;
        color: white ;
        background-color: #dad8d8;
        box-shadow: 0px 5px 5px rgba(180, 177, 175, 0.24);
    }
    .btn-edit, .btn-delete {
        border-radius: 50px;
        font-size: 14px;
    }
    .btn-delete {
        background-color: black;
    }
    .btn-delete:hover {
        transition: all .3s ease-in-out;
        background-color: rgb(51, 47, 47);
        box-shadow: 0px 5px 5px rgba(78, 74, 70, 0.24);
    }
    .btn-createAcc {
        font-size: 14px;
        border-radius: 0;
    }
    .btn-add {
        border-radius: 15px;
    }
    .btn-book {
        border-radius: 39px;
        font-size: 14px;
    }
</style>