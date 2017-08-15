<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เข้าสู่ระบบ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form id="signInForm" class="form-signin" action="submit-signin.php" method="post">
            <h2 class="form-signin-heading">เข้าสู่ระบบ</h2>
            <label for="email" class="sr-only">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">เข้าสู่ระบบ</button>
            <a href="questionnaire.php" class="btn btn-lg btn-info btn-block" role="button">สร้างบัญชีผู้ใช้</a>
        </form>
    </div>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.validate.js"></script>

    <script src="js/index.js"></script>

</body>

</html>