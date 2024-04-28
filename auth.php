<?php 
    session_start();
    include_once "db.php";
   
      if(isset($_POST['signup'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $phone = mysqli_real_escape_string($con, $_POST['phone']);
        $location = mysqli_real_escape_string($con, $_POST['location']);
        $age = mysqli_real_escape_string($con, $_POST['age']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
    
        $query = "INSERT INTO client(name,email,password,phone,location,age,gender)";
        $query .= "VALUES ('$name','$email','$password','$phone','$location','$age','$gender')";
    
    
        $query_run = mysqli_query($con, $query);
        
    
        if($query_run){
          $_SESSION['message'] = "Client Created Successfully";
          header("Location: home.php");
          exit(0);
        }else {
          $_SESSION['message'] = "Client Not Created";
          header("Location: create.php");
          exit(0);
        }
      }
     
?>