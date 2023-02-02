<?php 


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <title>PHP ToDo List JSON</title>
    </head>
    <body>
        <div id="app">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center text-white">Todo List</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-6">
                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item" v-for="(item, index) in array_list">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            {{ item.task }}
                                        </div>
                                        <div>
                                            <button class="m-1 btn btn-square btn-secondary" @click="editTask(index)">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="m-1 btn btn-square btn-danger" @click="deleteTask(index)">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </li> 
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center mt-3">
                    <div class="col-6">
                        <div class="input-group flex-nowrap">
                            <input type="text" class="form-control" placeholder="Inserisci elemento..." v-model="task">
                            <button class="input-group-text btn btn-warning w-25" @click="addTask">Inserisci</button>
                        </div>
                    </div>
                    <div class="col-12" v-if="error_message != ''">
                        <p class="text-danger text-center"><strong>{{ error_message }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="./js/script.js"></script>
    </body>
</html>