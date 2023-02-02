const { createApp } = Vue;

createApp({
    data() {
        return {
            api_url: 'server.php',
            array_list: [],
            task: '',
            error_message: ''
        }
    },
    methods: {
        //aggiungo un nuovo elemento
        addTask() {
            const data = {
                task: this.task,
                done: false,
            }

            if (this.task.trim() != '' && this.task != '') {
                axios.post(this.api_url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.task = '';
                    this.array_list = response.data;
                    this.error_message = '';
                })
            }
            else {
                this.error_message = 'Non puoi inserire una stringa vuota';
            }
        },
        //elimino un elemento
        deleteTask(index) {
            const data = {
                delete: index
            }

            axios.post(this.api_url, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.array_list = response.data;
            })
        }
    },
    created() {
        axios.get(this.api_url).then((response) => {
            this.array_list = response.data;
        });
    }
}).mount('#app');