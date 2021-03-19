<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<body>
    <div class="container">
      <div class="card mx-auto w-50 mt-5 border border-0">
        <div class="card-header bg-white text-dark border-0">
          <h1 class="text-center">LOGIN</h1>
        </div>
        <div class="card-body">
          <form action="../action/userAction.php" method="post">
              <div class="form-row">
                <div class="form-group col-md-12">
                <input type="email" name="email" class="form-control p-4" placeholder="E-mail">
                </div>
                <div class="form-group col-md-12">
                <input type="password" name="password" class="form-control p-4" placeholder="Password">
                </div>

              </div>
                <div class="form-row">
                  <div class="form-group col-md-12">
                    <input type="submit" name="login" value="Login" class="btn btn-dark form-control">
                  </div>
                </div>
                <a href="registration.php">don't have an account yet</a>
          </form>
        </div>
      </div>
    </div>
</body>
</html>