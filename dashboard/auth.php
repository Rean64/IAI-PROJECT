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
  


    
if(isset($_POST['submit'])){ 
    $titleEnglish = mysqli_real_escape_string($con, $_POST['titleEnglish']);
    $titleFrench = mysqli_real_escape_string($con, $_POST['titleFrench']);
    $descEnglish = mysqli_real_escape_string($con, $_POST['descEnglish']);
    $descFrench = mysqli_real_escape_string($con, $_POST['descFrench']);


     
          if(isset($_FILES['image'])){// if file is uploaded
           
            $img_name = $_FILES['image']['name']; //getting the users uploaded img name
            $tmp_name = $_FILES['image']['tmp_name']; //this temporary name is used to save/move file in our folder
       

            //let's explode image and get the last extension like jpg png
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode); //here we get the extension of a user uploaded img file

            $extensions = ['png', 'jpeg', 'jpg'];//these are some valid img ext and we've stored them in an array
            if(in_array($img_ext, $extensions) === true){//if user uploaded img ext is matched with any array extensions
              $time = time();//this will return to us the current time
                            //we need this time because when you uploading user img to in our folder we rename user file with the current time
                            //so all the image file will have a unique name
              //let's move the user uploaded img to our particular folder
              $new_img_name = $time.$img_name;

              if(move_uploaded_file($tmp_name, "assets/post_images/".$new_img_name)){//if user upload img move to our folder successfully
                $status = "online"; //once user signed up then his/her status will be active now               
                //let's insert all user data inside table
                $sql2 = mysqli_query($con, "INSERT INTO posts ( image, titleEnglish, titleFrench, descEnglish, descFrench)
                                      VALUES ('{$new_img_name}','{$titleEnglish}','{$titleFrench}','{$descEnglish}','{$descFrench}')");
                if($sql2){//if this data inserted
                  $_SESSION['posted'] = true;
                  header("Location: post.php");
                }else{
                  echo "Something went wrong!";
                }
              }
            }else{
              echo "Please select an image file - jpeg, png, jpg!";
            }

          }else{
            echo "Please select an image file!";
          }
        }
      
    
?>