<template>
    <div>
        <Section1 />
        <Section2 />
        <Section3 />
        <Section4 />
    </div>
</template>

<script>
import Section1 from './sections/Section1.vue'
import Section2 from './sections/Section2.vue'
import Section3 from './sections/Section3.vue'
import Section4 from './sections/Section4.vue'
export default {
    name: 'Home',
    components: {
        Section1,
        Section2,
        Section3,
        Section4
    },

    data(){
        return{
        message: 'Hello'
        }
    },

    methods:{
    
    }
}
</script>
