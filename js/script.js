const { createApp } = Vue;

createApp({
    data() {
        return {
            api_url: 'server.php',
            array_list: [],
            task: '',
        }
    },
    methods: {
        //aggiungo un nuovo elemento
        addTask() {
            const data = {
                task: this.task,
                done: false,
            }

            axios.post(this.api_url, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.task = '';
                this.array_list = response.data;
            })
        },
    },
    created() {
        axios.get(this.api_url).then((response) => {
            this.array_list = response.data;
        });
    }
}).mount('#app');