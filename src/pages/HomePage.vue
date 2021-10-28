<template>
  <div>
    <div id="home-page">
      Home Page
    </div>
    <div>
      <Button text="Create Account" :width="'351px'" :height="'40px'" />
      <Button text="Confirm" :width="'100px'" :height="'40px'" />
      <Button text="Cancel" :width="'100px'" :height="'40px'" />
      <Button text="Edit" :width="'96px'" :height="'27px'" />
      <Button text="Delete" :width="'96px'" :height="'27px'" />
      <Button text="Send" :width="'100px'" :height="'64px'" />
      <Button text="Add Product" :width="'222px'" :height="'51px'" />
      <Button text="Book My Table" :width="'169px'" :height="'53px'" />
      <Button text="Add New Picture" :width="'343px'" :height="'64px'" />
      <Button text="Login" :width="'257px'" :height="'64px'" />
    </div>

    <hr />

    <div>
      <AdminItem
        type="User"
        :width="'86%'"
        :height="'100px'"
        :items="['U123', 'Username2', 'someone@gmail.com', '0909090909']"
        :layout="[
          // Layout for each item accordingly
          'md-size-10 md-medium-size-10',
          'md-size-20 md-medium-size-15',
          'md-size-20 md-medium-size-15',
          'md-size-25 md-medium-size-20',

          //Last 2 for buttons
          'md-size-10 md-medium-size-15',
          'md-size-15 md-medium-size-25',
        ]"
      />

      <AdminItem
        type="Dish"
        :width="'94%'"
        :height="'100px'"
        :imgSize="'80px'"
        :items="[
          'PT123',
          'Dishname2',
          'https://i.picsum.photos/id/201/200/300.jpg?hmac=Tx2yx6Oeoo9q0lVwstbf0IaJXW4CFkKJgjpRVnSpNyU',
          'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a pellentesque elit. Maecenas vel mauris',
        ]"
        :layout="[
          // Layout for each item accordingly
          'md-size-10 md-medium-size-10',
          'md-size-20 md-medium-size-15',
          'md-size-25 md-medium-size-15',
          'md-size-25 md-medium-size-20',

          //Last 2 for buttons
          'md-size-10 md-medium-size-20',
          'md-size-10 md-medium-size-20',
        ]"
      />
    </div>

    <hr />

    <div>
      <ControlField
        type="BlogTitle"
        width="80%"
        height="80px"
        label="Blog Field Name"
        content="Initial content 1"
      ></ControlField>

      <ControlField
        type="BlogContent"
        width="80%"
        height="500px"
        label="Blog Content"
        content="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at viverra. 
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula. In eu dui molestie, molestie lectus eu, semper lectus. 
Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
Morbi efficitur auctor metus, id mollis lorem pellentesque id. Nullam posuere maximus dui et fringilla. "
      ></ControlField>

      <ControlField
        type="DishTitle"
        width="60%"
        height="80px"
        label="Dish Field Name"
        content="Initial content 2"
      ></ControlField>

      <ControlField
        type="DishDescription"
        width="60%"
        height="160px"
        label="Dish description field"
        content="Initial content 3"
      ></ControlField>
    </div>

    <hr />

    <div>
      <Pagination
        :totalPages="10"
        :perPage="10"
        :maxVisibleButtons="3"
        :currentPage="currentPage"
        @pagechanged="onPageChange"
      />
    </div>

    <hr />
  </div>
</template>

<script>
import Button from "../components/Button.vue";
import AdminItem from "../components/AdminItem.vue";
import ControlField from "../components/ControlField.vue";
import Pagination from "../components/Pagination.vue";

export default {
  name: "homePage",
  components: {
    Button,
    AdminItem,
    ControlField,
    Pagination,
  },
  data() {
    return {
      currentPage: 1,
    };
  },
  methods: {
    onPageChange(page) {
      console.log(page);
      this.currentPage = page;
    },
  },
};
</script>
