const { createApp } = Vue;

createApp({
    data() {
        return {
            api_url: 'server.php',
            array_list: [],
            task: '',
        }
    },
    created() {
        axios.get(this.api_url).then((response) => {
            this.array_list = response.data;
        });
    }
}).mount('#app');