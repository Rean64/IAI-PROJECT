<?php
session_start();
require 'db.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5">

  <?php include('message.php') ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Edit Personel
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h4>
          </div>
          <div class="card_body">

          <?php
            if(isset($_GET['id']))
            {
              $personel_id = mysqli_real_escape_string($con, $_GET['id']);
              $query = "SELECT * FROM admin WHERE id='$personel_id'";
              $query_run = mysqli_query($con, $query);

              if(mysqli_num_rows($query_run) > 0){

                $personel = mysqli_fetch_array($query_run);
                ?>
                <form action="codes.php" method="POST">
                    <input type="hidden" name="personel_id" value="<?= $personel['id'];?>">

                    <div class="mb-3">
                      <label>Position</label>
                      <input type="text" name="position" value="<?=$personel['position'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label>Name</label>
                      <input type="text" name="name" value="<?=$personel['name'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label>Password</label>
                      <input type="text" name="password" value="<?=$personel['password'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                      <label>Date</label>
                      <input type="text" name="date" value="<?=$personel['date'];?>" class="form-control">
                    </div>
                    <div class="mb-3">
                      <button type="submit" name="update_personel" class="btn btn-primary">Update Personel</button>
                    </div>
                </form>
                <?php
              } else {
                echo "<h4>No Such Id Found!</h4>";
              }
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>