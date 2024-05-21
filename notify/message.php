
<?php

if(isset($_SESSION['mess'])) :

?>
?>
    <div class="toasts ">
        <div class="toasts-content">
            <i class="fas fa-solid fa-check check"></i>
            
            <div class="message">
                <span class="text text-1">Success</span>
                <span class="text text-2"><?= $_SESSION['t']; ?></span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>

        <div class="progress"></div>
    </div>

<?php
    unset($_SESSION['mess']);
    endif;
?> 