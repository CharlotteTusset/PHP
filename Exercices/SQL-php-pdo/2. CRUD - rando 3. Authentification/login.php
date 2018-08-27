<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>

    <form action="check_login.php" method="post">
      <div>
        <label for="username">Username</label>
        <input type="text" name="username">
      </div>
      <div>
        <label for="password">Password</label>
        <input type="password" name="password">
      </div>
      <div>
        <button type="button" name="button">Connect</button>
      </div>
    </form>
  </body>
</html>