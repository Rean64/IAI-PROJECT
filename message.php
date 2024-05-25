
<?php

if(isset($_SESSION['myuser'])) :

?>

    <div class="toasts">
        <div class="toasts-content">
            <i class="fas fa-solid  <?php echo htmlspecialchars($_SESSION['info'] ? 'fa-check' : 'fa-xmark'); ?> check"></i>
            
            <div class="message">
                <span class="text text-1"><?php echo htmlspecialchars($_SESSION['info'] ? 'Success' : 'Sorry'); ?></span>
                <span class="text text-2"><?= $_SESSION['t']; ?></span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>

        <div class="progress " style="background-color:<?php echo htmlspecialchars($_SESSION['info'] ?  : '#f44040'); ?>"></div>
    </div>

<?php
    unset($_SESSION['mess']);
    endif;
?> 