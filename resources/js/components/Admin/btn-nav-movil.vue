<template>
<div>
     <button @click="show()" class="navbar-toggler" type="button"  >
                <svg width="41" height="26" viewBox="0 0 41 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" width="40" height="4" rx="2" fill="#FBF9FF"/>
                <rect x="7" y="11" width="34" height="4" rx="2" fill="#FBF9FF"/>
                <rect y="22" width="41" height="4" rx="2" fill="#FBF9FF"/>
                </svg>
        </button>
</div>
       
</template>

<script>
    export default {
        name:"menu-nav-movil-buttom",
        methods: {
            close(cval){
                this.stateMenu = cval
            },
            show(){
            this.stateMenu = !this.stateMenu
            console.log(this.stateMenu)
            this.$store.commit("showMenuD", this.stateMenu);
            }
        },
    }
</script>

<style lang="scss" scoped>

</style>