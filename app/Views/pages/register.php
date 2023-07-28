<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/assets/css/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <h2>Registration</h2>
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
        <?php endif; ?>
        <form action="/register/save" method="POST">
            <div class="input-box">
                <input type="text" placeholder="Enter your name" name="nama" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="email" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" name="password" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="confpassword" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your phone number" name="no_telp" required>
            </div>
            <div class="policy">
                <input type="checkbox">
                <h3>I accept all term & condition</h3>
            </div>
            <div class="input-box button">
                <input type="Submit" value="Sign Up">
            </div>
            <div class="text">
                <h3>Already have an account? <a href="<?php echo site_url('Login'); ?>">Sign In now</a></h3>
            </div>
        </form>
    </div>
</body>

</html>