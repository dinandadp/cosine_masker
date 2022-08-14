<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - Login</title>
  <link href="gambar/logo_.png" rel="shortcut icon">
  <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <style type="text/css">
    * {
      box-sizing: border-box;
    }

    @font-face {
      font-family: 'Halimun';
      src: url('font/Halimun.ttf');
    }

    @font-face {
      font-family: 'BrandonText-Light';
      src: url('font/BrandonText-Light.otf');
    }

    body form {
      margin: 0;
      font-family: sans-serif;
      font-size: 1rem;
      line-height: 1.5;
      color: #333;
      overflow-x: hidden;
    }

    .wrapper {
      margin: auto;
      max-width: 100%;
      text-align: center;
    }

    .box {
      width: 100%;
      height: 100%;
      position: absolute;
      overflow: hidden;
    }

    .box img {
      width: 100%;
      height: 100%;
    }

    .login-box-body {
      box-sizing: border-box;
      color: #000000;
      background-color: #FFE9E9;
      border-radius: 20px;
      top: 50%;
      left: 49.6%;
      width: 370px;
      height: 420px;
      padding: 70px;
      transform: translate(-50%, -50%);
      position: absolute;
    }

    .avatar {
      top: -50px;
      left: calc(50% - 13%);
      width: 100px;
      height: 100px;
      position: absolute;
    }

    .login-box input {
      margin-bottom: 30px;
      width: 220px;
    }

    .login-box input[type="text"],
    input[type="password"] {
      border: none;
      border-bottom: 1px solid #000000;
      background-color: transparent;
      color: #000000;
      font-size: 14px;
      height: 40px;
    }

    .login-box button[type="submit"] {
      border: none;
      border-radius: 20px;
      background-color: #76C4AC;
      outline: none;
      color: #000000;
      font-family: BrandonText-Light;
      font-weight: bold;
      font-size: 14px;
      letter-spacing: 1.5px;
      width: 230px;
      height: 28px;
    }

    .login-box button[type="submit"]:hover {
      cursor: pointer;
      color: #000000;
      background-color: #F791BA;
    }

    .login-logo h5 {
      margin-bottom: 40px;
      color: #000000;
      font-family: 'Halimun';
      font-size: 20px;
      font-weight: bold;
    }
  </style>
</head>

<body class="hold-transition login-page">
  <header class="wrapper head">

    <div class="box">
      <img src="gambar/bg_login.jpg"></img>
    </div>

    <div class="content">
      <div class="login-box">
        <div class="login-box-body">
          <img src="gambar/logo_.png" class="avatar">
          <div class="login-logo">
            <h5>Hello, Admin!</h5>
          </div>

          <form action="login.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="txtusername" placeholder="username">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="txtpassword" placeholder="password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
              <!-- /.col -->
              <div class="col-xs-15">
                <br>
                <button type="submit" name="btnlogin" class="">Login</button> <br><br>
              </div>
              <!-- /.col -->
            </div>
          </form>

        </div>
      </div>
    </div>

  </header>
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="plugins/iCheck/icheck.min.js"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
</body>

</html>