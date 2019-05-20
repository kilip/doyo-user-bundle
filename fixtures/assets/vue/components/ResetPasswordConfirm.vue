<template>
    <section class="hero is-danger">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Reset Password
                </h1>
                <p class="subtitle">
                    Will do reset password
                    <br/>Your token is: {{$route.params.token}}
                </p>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "ResetPasswordConfirm"
    }
</script>