<?php
    require_once 'database.php';

class User extends Database{

  public function createAccount($email, $password){
    $sql = "INSERT INTO accounts(email, password) VALUES ('$email', '$password')";

    $result = $this->conn->query($sql);

    if($result == false){
       die("CANNOT ADD ACCOUNTS: ".$this->conn->error);
    }else{
      return true;
    }
  }

  public function createUser($first_name, $last_name, $add){
    $user_account_id = $this->conn->insert_id;
    $sql = "INSERT INTO users(first_name, last_name, address, account_id) VALUES ('$first_name', '$last_name', '$add', '$user_account_id' )";

    if($this->conn->query($sql)){
      header("Location: ../index.php");
    }else{
      die("CANNOT CREATE ACCOUNT:" .$this->conn->error);
    }
  }

  public function login($email, $password){
      $sql = "SELECT * FROM accounts INNER JOIN users ON users.account_id = accounts.account_id WHERE email = '$email'";

      $result = $this->conn->query($sql);

      if($result->num_rows == 1){
          $row = $result->fetch_assoc();

          if(password_verify($password, $row['password'])){
              $_SESSION['email'] = $row['email'];
              $_SESSION['user_id'] = $row['user_id'];
              $_SESSION['first_name'] = $row['first_name'];
              $_SESSION['last_name'] = $row['last_name'];
              $_SESSION['status'] = $row['account_status'];

              header("Location: ../index.php");
          }
      }
  }

  public function book($user_id, $email, $phone_number, $date, $time, $number_of_people){
    $sql = "INSERT INTO book(user_id, email, phone_number, date, time, number_of_people) VALUES ('$user_id','$email','$phone_number', '$date', '$time', '$number_of_people')";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      echo "<div>Reservation completed</div>";
    }else{
      die('ERROR'.$this->conn->error);
    }
  }

  public function contact($full_name, $email, $subject, $message){
    $sql = "INSERT INTO contact(full_name, email, subject, message) VALUES ('$full_name', '$email', '$subject', '$message')";
    $result = $this->conn->query($sql);

    if($result == TRUE){
      header("Location: ../index.php");
    }else{
      die('ERROR'.$this->conn->error);
    }

  }


}



?>