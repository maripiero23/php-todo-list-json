<?php

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList API PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <main class="container">

            <form >
                <input type="text" name="todo_name" placeholder="Enter your todo" v-model="inpuToDo">
                <button @click.prevent="createToDo">New ToDo</button>
            </form>


            <section>
                <div>
                    <ul>
                        <li v-for=""></li>
                    </ul>
                </div>
            </section>

        </main>
    </div>

</body>
<script src="js/main.js"></script>
</html>