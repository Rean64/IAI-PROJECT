<?php
// session_start();

$query = "SELECT * FROM messages ORDER BY id DESC";
$query_run = mysqli_query($con, $query);

if(mysqli_num_rows($query_run) > 0){

  $personel = mysqli_fetch_array($query_run);
  
  if(isset($_SESSION['q'])){
  ?>
      <div class="popup" id="popup">
          <div class="i">
              <i class="fas fa-envelope"  style="color:white;font-size:40px"></i>
          </div>
          <h2>Notification</h2>
          <h3 class="form-control">
             <strong>M.,</strong> <?=$personel['name'];?> <?=$personel['message'];?> .
          </h3>
          <button class="popup-close close-btn" type="submit">Fermer</button>
      </div>
      <?php
}
}

session_unset();
session_destroy();
  ?>