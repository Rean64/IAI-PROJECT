<?php
require 'db.php';
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5">


    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Personels Details
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

                    <div class="mb-3">
                      <label>Position</label>
                      <p class="form-control">
                        <?=$personel['position'];?>
                      </p>
                    </div>
                    <div class="mb-3">
                      <label>Name</label>
                      <p class="form-control">
                        <?=$personel['name'];?>
                      </p>
                    </div>
                    <div class="mb-3">
                      <label>Password</label>
                      <p class="form-control">
                        <?=$personel['password'];?>
                      </p>
                    </div>
                    <div class="mb-3">
                      <label>Date</label>
                      <p class="form-control">
                        <?=$personel['date'];?>
                      </p>
                    </div>
                    <div class="mb-3">
                      <label>Status</label>
                      <p class="form-control">
                        <?=$personel['status'];?>
                      </p>
                    </div>
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

<script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>
</html>