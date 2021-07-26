<template>
    <section class="container">
            <h2 class="top-users-heading">Top users</h2>
            <div style="margin-bottom:100px" class="row ">
                <div style="margin-top:20px;" class="col-sm-12 col-md-6 col-lg-4" v-for="user in filteredUserGrids" :key="user.user.id">
                        <CardUser v-if="user.user!=null" :user="user" />
                </div>
            </div>
    </section>
</template>

<script>
import { mapGetters } from "vuex";
import CardUser from './card-user';
    export default {
        props:['users'],
        name:"top-users",
        components: {
            CardUser,
        },
        computed: {
           ...mapGetters(["filteredUserGrids"]),
        },
        mounted () {
            this.$store.commit("setUserGrids", this.users);
        },
    }
</script>

<style lang="scss" scoped>
 @media only screen and (max-width: 767px){
            .top-users-heading{
                font-family:'Rubik';
                margin-top:170px!important;
                font-size: 24px!important;
                text-align:center!important;
                color:#30019B;  
                font-weight:700;
            }
        }  
 @media only screen and (min-width: 768px){
            .top-users-heading{
                font-family:'Rubik';
                margin-top:40px!important;
                font-size: 24px!important;
                text-align:center!important;
                color:#30019B;  
                font-weight:700;
            }
        }
</style>