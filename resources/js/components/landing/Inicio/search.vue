<template>
     <div class="input-group mt-5 input-search">
                                                                <input type="text" v-model="user" class="form-control" placeholder="Find your creator" aria-label="Find your creator" aria-describedby="basic-addon1">
                                                                <button class="icon"><i class="fa fa-search"></i></button>
                                                           
                                                                 </div>
</template>

<script>
    export default {
        name:"search-component",
        computed: {
            user: {
            get() {
                return this.$store.state.filterUserGrids.user;
            },
            set(value) {
                this.$store.commit("setfilterUserGrids", {
                filter: "user",
                value,
                });
            },
            },
        },
    }
</script>

<style lang="scss" scoped>

</style>