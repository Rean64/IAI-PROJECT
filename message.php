
<?php

if(isset($_SESSION['message'])) :

?>

<div class="container">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Hey! </strong> votre compte a ete cree avec succes. 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
</div>


<?php
    unset($_SESSION['message']);
    endif;
?> 