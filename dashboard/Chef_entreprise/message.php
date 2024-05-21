
<?php

if(isset($_SESSION['message'])) :

?>

    <div class="toast">
        <div class="toast-content">
            <i class="fas fa-solid fa-check check"></i>

            <div class="message">
                <span class="text text-1">Success</span>
                <span class="text text-2"><?=$_SESSION['message']?></span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>

        <div class="progress"></div>
    </div>

<?php
    unset($_SESSION['message']);
    endif;
?> 