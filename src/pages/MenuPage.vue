<template>
    <div>
        <div class="title-wrapper">
            <div class="menu-title">
                <p>Our Menu</p>
            </div>
            <div class="menu-description">
                <p>Fish is one of the most wholesome foods that man can eat. In fact, people have been eating fish throughout human.</p>
            </div>
        </div>
        <div class="d-flex flex-wrap justify-center">
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
            <Dish 
                name="Chips"
                description="Aenean commodo ligula eget dolor aenean massa. Cum sociis natoque"
                img="https://lh3.googleusercontent.com/1L1ZDLSUZnLZojS4yKUZp3QwCB44PRhCL_IgnmyqittiC8505gPd-yE9QMqLN0KWrW89s29q4lxgpGx59yakM_Q=s640-c-rw-v1-e365"
            />
        </div>
        <div class="btn-wrapper d-flex justify-center">
            <div>
                <Button
                    text="Book Your Table"
                    width="207px"
                    height="53px"
                />
            </div>           
        </div>
    </div>
</template>

<script>
import Dish from '../components/Dish.vue';
import Button from '../components/Button.vue';
export default {
    name: 'MenuPage',
    components: {
        Dish,
        Button,
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Oleo+Script+Swash+Caps&display=swap');
.title-wrapper {
    margin-bottom: 4%;
}
.menu-title {
    font-family: Oleo Script Swash Caps;
    text-align: center;
    font-size: 500%;
    margin: 2% 0% -1% 0%;
}
.menu-description {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    text-align: center;
}
.btn-wrapper {
    margin: 25px 0 65px 0;
}
</style>