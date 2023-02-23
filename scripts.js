const { createApp } = Vue;

createApp({
    data(){
        return {
            toDoList: [],
        };
    },
    methods:{

    },
    created() {
        axios
            .get('./api.php')
            .then((response) => {
                console.log(response);
                this.toDoList = response.data.toDoList;
                
            })
        }
}).mount('#app');