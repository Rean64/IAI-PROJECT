<?php
    session_start();
    include_once "db.php";
    if(isset($_SESSION['logout_id'])){
            $status = "Offline";
            $sql = mysqli_query($con, "UPDATE admin SET status = '{$status}' WHERE id = {$row['id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../index.php");
            }else{
            echo "Something is wrong" .mysql_error();
          }
        }
      
?>