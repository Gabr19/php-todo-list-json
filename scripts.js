const { createApp } = Vue;

createApp({
    data(){
        return {
            readUrl: './api.php',
            addUrl: './add.php',
            toDoList: [],
            newTask: {
                taskName: '',
                
            }
        };
    },
    methods:{
        addTask() {
            console.log(this.newTask)
            axios
                .post(this.addUrl, {
                    toDoList: this.newTask
                }, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                }) .then((response) =>{
                    console.log(response);
                    this.toDoList.push(response.data.response);
                })
        }
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