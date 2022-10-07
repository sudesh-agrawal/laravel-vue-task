<template>
    <div>
        <h1 ref="myref">Hook tutorial</h1>
        <p>My name is {{name}}</p>
    </div>
</template>

<script>
export default {
    data(){
        return {
            name: 'Harry'
        }
    },

    beforeCreate(){
        console.log(this.name)
    },

    created(){
        // call mostly initial data from it...
        console.log(this.$refs.myref)
        console.log('data and other function is available but not html available in created hook', this.name)
    },

    mounted(){
        console.log(this.$refs.myref);
    }
}
</script>