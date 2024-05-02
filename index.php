<!DOCTYPE html>
<html lang="ru">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/Style_login.css">
</head>

<body>
  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <form action="login.php" method="post">
          <h1>Авторизация</h1>
      </div>
      <div class="login-form">
        <div class="control-group">
          <input type="text" class="login-field" placeholder="username" name="login">
        </div>
        <div class=" control-group">
          <input type="password" class="login-field" placeholder="password" name="pass">
          <div class="loginbut">
            <button type="submit" class="btn btn-primary btn-large btn-block">Вход</button>
            <a class="login-link" href="#">Забыли пароль?</a>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>