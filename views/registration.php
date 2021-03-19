<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registraction</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mx-auto w-50 mt-5 border border-0">
      <div class="card-header bg-white border-0 text-danger">
        <h1 class="text-center">REGISTRATION</h1>
      </div>
      <div class="card-body">
        <form action="../action/userAction.php" method="post">
          <div class="form-row mt-4">
            <div class="form-group col-md-6">
              <input type="text" name="first_name" class="form-control p-4" placeholder="First Name" id="" required>
            </div>
            <div class="form-group col-md-6">
            <input type="text" name="last_name" class="form-control p-4" placeholder="Last Name" id="" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="address" class="form-control p-4" placeholder="Address" id="">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="email" name="email" class="form-control p-4" placeholder="E-mail" id="" required>
            </div>
          </div>

          <!-- <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="contact_number" class="form-control p-4" placeholder="Contact" id="" required>
            </div>
          </div> -->

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="password" name="password" class="form-control p-4" placeholder="Password" id="" requird>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="submit" value="Register" name="register" class="form-control btn btn-danger btn-lg">
            </div>
          </div>

          <a href="login.php">already have an account</a>
          

          
        </form>
      </div>
    </div>
  </div>
</body>
</html>