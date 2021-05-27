<template>
    <div class="container">
        <h2 class="subtitleadmin">Users</h2>
        <Search accion="users" />
        <br>
        
             <table class="table table-responsive-sm">
                    <thead>
                    <tr class="table-bg">
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(user,index) in filteredUsers" :key="index">
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>{{user.created_at}}</td>
        
                    </tr>
                
                    </tbody>
        </table>
      
       
    </div>
</template>

<script>
import { mapGetters } from "vuex";
import Search from './Utils/search'
    export default {
        name:"users-content-component",
        props:["users"],
        mounted () {
             this.$store.commit("setUsers", this.users);;
        },
        computed: {
         ...mapGetters(["filteredUsers"]),
        },
        components: {
            Search,
        },
    }
</script>

<style lang="scss" scoped>
     .subtitleadmin{
        font-family: 'Rubik';
        font-size: 20px;
        color:#5F01F5;
    }
     .table-bg{
        background-color: #0f042613;
    }
    .table-width{
        min-width: 875px;
    }
</style>