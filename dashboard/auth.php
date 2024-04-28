<?php 
    session_start();
    include_once "db.php";

    if(isset($_POST['login'])){
    if(isset($_POST['admin'])){
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      if(!empty($name) && !empty($password)){
          $sql = mysqli_query($con, "SELECT * FROM admin WHERE name = '{$name}'");
          if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
              $user_pass = $password;
              $names = $name;
              $enc_pass = $row['password'];
              $name = $row['name'];
              if($names === $name && $user_pass === $enc_pass){
                    $_SESSION['id'] = $row['id'];
                    echo "Succefully Login";
                    header("Location: admin/index.php");
                    exit(0);
                }else{
                    echo "Something went wrong. Please try again!";
                }
              }else{
                  echo "Name or Password is Incorrect!";
              }
          }else{
              echo "$name - This name not Exist!";
          }
      }
    }
  

    if(isset($_POST['login'])){
    if(isset($_POST['service'])){
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      if(!empty($name) && !empty($password)){
        $sql = mysqli_query($con, "SELECT * FROM services WHERE name = '{$name}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = $password;
            $names = $name;
            $enc_pass = $row['password'];
            $name = $row['name'];
            if($names === $name && $user_pass === $enc_pass){
                    $_SESSION['id'] = $row['id'];
                    echo "Succefully Login";
                    header("Location: service_client/index.php");
                    exit(0);
                }else{
                    echo "Something went wrong. Please try again!";
                }
              }else{
                  echo "Name or Password is Incorrect!";
              }
          }else{
              echo "$name - This name not Exist!";
          }
      }
    }
  

    if(isset($_POST['login'])){
    if(isset($_POST['chef'])){
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      if(!empty($name) && !empty($password)){
        $sql = mysqli_query($con, "SELECT * FROM chef WHERE name = '{$name}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = $password;
            $names = $name;
            $enc_pass = $row['password'];
            $name = $row['name'];
            if($names === $name && $user_pass === $enc_pass){
                    $_SESSION['id'] = $row['id'];
                    echo "Succefully Login";
                    header("Location: Chef_entreprise/index.php");
                    exit(0);
                }else{
                    echo "Something went wrong. Please try again!";
                }
              }else{
                  echo "Name or Password is Incorrect!";
              }
          }else{
              echo "$name - This name not Exist!";
          }
      }
    }
  

    if(isset($_POST['login'])){
    if(isset($_POST['director'])){
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $password = mysqli_real_escape_string($con, $_POST['password']);

      if(!empty($name) && !empty($password)){
        $sql = mysqli_query($con, "SELECT * FROM director WHERE name = '{$name}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = $password;
            $names = $name;
            $enc_pass = $row['password'];
            $name = $row['name'];
            if($names === $name && $user_pass === $enc_pass){
                    echo "Succefully Login";
                    header("Location: director_general/index.php");
                    exit(0);
                }else{
                    echo "Something went wrong. Please try again!";
                }
              }else{
                  echo "Name or Password is Incorrect!";
              }
          }else{
              echo "$name - This name not Exist!";
          }
      }
    }
  
    
?>