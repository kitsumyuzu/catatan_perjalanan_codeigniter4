<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Webpage Icon & Title -->
        
            <title>Login</title>
            
            <link rel="icon" href="<?= base_url('assets/icon/favicon.ico') ?>" type="image/x-icon">

        <!-- Requesting  -->

            <link rel="stylesheet" href="<?= base_url('assets') ?>/login/style.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/fonts/fontawesome-free/css/all.min.css">

            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    </head>

    <body>

        <div class="box">

            <span class="borderline"></span>

            <form action="<?= base_url('/home/authentication_login/') ?>" method="POST">

                <h2>Login</h2>

                <div class="inputBox">

                    <input type="text" name="username_input" maxlength="75" required autofocus>
                    <span>Username or Email</span>
                    <i></i>

                </div>

                <div class="inputBox">

                    <input type="password" name="password_input" maxlength="100" required>
                    <span>Password</span>
                    <i></i>

                </div>

                <div class="links">

                    <a href="#">Forgot Password!</a>

                </div>


                <!-- Submit -->

                    <?php if (session()->has('alert')): ?>

                        <div style="color: #ff0000;" class="alert alert-warning">

                            <?= session()->get('alert') ?>

                        </div>

                    <?php endif; ?>

                    <div class="g-recaptcha" data-sitekey="6LfSFsgnAAAAAGm3Q1J8L_rc8S0OsYsAHPFdX5cL"></div>

                    <input type="submit" value="Login" id="login">

            </form>

        </div>

    </body>

</html>

    <script>

        $(document).on('click', '#login', function() {

            var response = grecaptcha.getResponse();

            if (response.length == 0) {

                alert('Please verify yourself as human!');
                return false;

            }

        })
        
    </script>