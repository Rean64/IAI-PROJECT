<?php
session_start();
?>

<?php include('includes/header.php'); ?>
  

  <div class="container mt-5">

  <?php include('message.php') ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header mb-3">
            <h4>Add Personel
              <a href="index.php" class="btn btn-danger float-end">BACK</a>
            </h4>
          </div>
          <div class="card_body">
            <form action="codes.php" method="POST">
                <div class="mb-3">
                  <label>Position</label>
                  <input type="text" name="position" class="form-control" placeholder="Position">
                </div>
                <div class="mb-3">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter name">
                </div>
                <div class="mb-3">
                  <label>Password</label>
                  <input type="text" name="password" class="form-control" placeholder="Enter password">
                </div>
                <div class="mb-3">
                  <label>Phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="Enter  phone number">
                </div>
                <div class="mb-3">
                  <label>Date</label>
                  <input type="text" name="date" class="form-control" placeholder="Enter date">
                </div>

                <div class="mb-3">
                  <button type="submit" name="save_personel" class="btn btn-primary">Save Personel</button>
                </div>
            </form>
          </div> 
        </div>
      </div>
    </div>
  </div>

  <?php include('includes/footer.php'); ?>