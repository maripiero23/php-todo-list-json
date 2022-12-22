const { createApp } = Vue;
console.log('vue loaded')
const app = createApp({
    data(){
        return{
            inpuToDo:"",

        };
    },
    methods: {
        createToDo(){
            console.log(this.inpuToDo);
        }

    }
}).mount("#app");