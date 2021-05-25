<template>
    <div class="container-fluid">
        <h2 class="subtitleadmin">Users</h2>
        <Search action="users" />
        <br>
        
             <table class="table">
                    <thead>
                    <tr class="table-bg">
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Registration Date</th>
                      
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="(user,index) in users" :key="index">
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>{{user.created_at}}</td>
        
                    </tr>
                
                    </tbody>
        </table>
      
       
    </div>
</template>

<script>
import Search from './Utils/search'
    export default {
        name:"users-content-component",
        props:["users"],
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