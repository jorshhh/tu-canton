// App.vue

<template>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link to="/" class="nav-link">Ejercicio Tu Cantón</router-link>
                </li>
            </ul>
        </nav><br />
        <div>
            <transition name="fade">
                <router-view></router-view>
            </transition>
        </div>
    </div>
</template>

<style>

</style>

<script>

    export default{
    }
</script>