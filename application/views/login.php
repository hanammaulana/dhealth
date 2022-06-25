<style>
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }
</style>

<body>
    <div class="login-form">
        <section class="login_content">
            <form action="<?php echo site_url('LoginController/cek_login') ?>" method="post">
                <div class="form-group">
                <h1>D'Health</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" required="required" />
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="required" />
                    </div>
                    <div>
                        <input class="btn btn-primary btn-block" type="submit" value="Login" style="margin-left:0px">
                    </div>

                    <div class="clearfix"></div>
            </form>
        </section>
    </div>


</body>