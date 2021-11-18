<template>
    <div>
        <div class="d-flex">
            <div>ID</div>
            <div>Name</div>
            <div>Image</div>
            <div>Description</div>
            <div>
                <Button
                    @onClick="handleBookBtnClick"
                    text="Add Product"
                    width="207px"
                    height="53px"
                    to="/admin/addDish"
                />
            </div>
        </div>
        <div class="d-flex flex-wrap justify-center">
            <div v-for="dish in dishes" :key="dish.id">
                <AdminItem
                    type="Dish"
                    :width="'100vw'"
                    :height="'100px'"
                    :imgSize="'70px'"
                    :items="[dish.id, dish.name, dish.image, dish.description]"
                    :layout="[]"
                />
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
import Button from "../components/Button.vue";
import AdminItem from "../components/AdminItem.vue";
export default {
    name: 'adminMenu',
    components: {
        AdminItem,
        Button,
    },
    data() {
        return {
            dishes: [],
        };
    },
    methods: {
        getMenu() {
            const __this = this;
            var settings = {
                url: `${process.env.VUE_APP_API_URL}/menu`,
                method: "GET",
                timeout: 0,
            };

            $.ajax(settings)
                .done(function(response) {
                const a = JSON.parse(response).response;
                __this.dishes = a;
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + ": " + errorThrown);
                });
        },
    },
    beforeMount() {
        this.getMenu();
    },
}
</script>