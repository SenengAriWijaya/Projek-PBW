<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="/assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <h2>Login</h2>
        <?php if (session()->getFlashdata('msg')) : ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
        <?php endif; ?>
        <form action="/login/auth" method="POST">
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Enter your password" name="password" required>
            </div>
            <div class="policy">
                <div class="policy-content">
                    <input type="checkbox">
                    <h3>Remember me</h3>
                </div>
                <a href="#">Forgot password</a>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Sign In">
            </div>
            <div class="text">
                <h3>Don't have an account? <a href="<?php echo site_url('Register'); ?>">Sign Up for here</a></h3>
            </div>
        </form>
    </div>
</body>

</html>