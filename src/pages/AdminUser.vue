<template>
    <div>
        <div class="d-flex">
            <div>ID</div>
            <div>Name</div>
            <div>Image</div>
            <div>Description</div>
        </div>
        <div class="d-flex flex-wrap justify-center">
            <div v-for="user in users" :key="user.id">
                <AdminItem
                    type="User"
                    :width="'100vw'"
                    :height="'100px'"
                    :imgSize="'70px'"
                    :items="[user.id, user.username, user.email, user.phoneNumber]"
                    :layout="[]"
                />
            </div>
        </div>
    </div>
</template>

<script>
import $ from "jquery";
import AdminItem from "../components/AdminItem.vue";
export default {
    name: "adminUser",
    components: {
        AdminItem,
    },
    data() {
        return {
            users: [],
        };
    },
    methods: {
        getUser() {
            const __this = this;
            var settings = {
                url: `${process.env.VUE_APP_API_URL}/admin/users`,
                method: "GET",
                timeout: 0,
                headers: {
                    "Bear-Token": localStorage.getItem("UserToken"),
                },
            };

            $.ajax(settings)
                .done(function(response) {
                const a = JSON.parse(response).response;
                __this.users = a;
                })
                .fail(function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus + ": " + errorThrown);
                });
        },
    },
    beforeMount() {
        this.getUser();
    },
}
</script>