<template>
    <div id="vue">
        <div id="main-navbar">
            <b-navbar toggleable="lg" type="dark" variant="info">
                <b-navbar-brand href="#">DoyoLabs</b-navbar-brand>

                <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

                <b-collapse id="nav-collapse" is-nav>
                    <b-navbar-nav>
                        <router-link tag='b-nav-item' to="/">Home</router-link>
                        <router-link tag='b-nav-item' to="/register">Register</router-link>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
        </div>
        <div id="main-content" class="container">
            <div class="row">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import 'bootstrap/dist/css/bootstrap.css'
    import 'bootstrap-vue/dist/bootstrap-vue.css'
    export default {
        name: "App"
    }
</script>

<style>
#main-navbar {
    padding-bottom: 24px;
}
</style>