<template>
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-4">
            <h2  class="subtitleadmin">Sold out blocks</h2>
            <div class="home-card">
                <strong>{{blocks}}</strong>
                <button class="btn btn-date">Update {{moment().locale('en').format('LL')}}</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <h2  class="subtitleadmin">Sold out grids</h2>
            <div class="home-card">
                <strong>{{grids}}</strong>
                <button class="btn btn-date">Update {{moment().locale('en').format('LL')}}</button>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <h2  class="subtitleadmin">Total block income</h2>
            <div class="home-card">
                <strong>{{totalincome}}$</strong>
            </div>
        </div>
         <div class="col-sm-12 col-md-4">
            <h2  class="subtitleadmin">Total grid income</h2>
            <div class="home-card">
                <strong>{{totalgridincome}}$</strong>
            </div>
        </div>
         <div class="col-sm-12 col-md-4">
            <h2  class="subtitleadmin">Gridstarters rate</h2>
            <div class="home-card">
                <strong>{{rate}}$</strong>
            </div>
        </div>
    </div>
    </div>
    
</template>

<script>
    export default {
        name:"admin-home",
        props:['blocks','grids','sales','gridsales'],
        computed: {
            totalincome() {
                var pre=0;
                this.sales.forEach(element => {
                    pre=pre+element.amount;
                });
                return pre; 
            },
            totalgridincome() {
                var pru=0;
                this.gridsales.forEach(element => {
                    pru=pru+element.amount;
                });
                return pru; 
            },
            rate() {
                var pro=0;
                this.sales.forEach(element => {
                    pro=pro+element.tax;
                });
                return pro; 
            }
        },
    }
</script>

<style lang="scss" scoped>
    .subtitleadmin{
        font-family: 'Rubik';
        font-size: 20px;
        color:#5F01F5;
    }
    .home-card{
        height: 169px;
        width: 100%;
        flex-direction: column;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(90deg, rgba(48,1,155,1) 0%, rgba(95,1,245,1) 100%);
        border-radius: 12px;
    }
    .home-card strong{
        font-family: 'Valera';
        font-size: 72px;
        color:#ffffff;
    }
    .btn-date{
        background-color: #FFFFFF;
        border-radius: 8px;
        height: 34px;
        font-size: 14px;
        width: 240px;
        color:#0f042680;

    }
</style>