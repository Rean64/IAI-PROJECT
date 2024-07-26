<?php

if(isset($_SESSION['papi'])) :

?>

    <div class="toasts">
        <div class="toasts-content">
            <i class="fas fa-solid <?php echo htmlspecialchars($_SESSION['papi'] ? 'fa-check' : 'fa-check'); ?> check"></i>
            
            <div class="message">
                <span class="text text-1"><?php echo htmlspecialchars($_SESSION['papi'] ? 'Verification Code' : 'Verification Code'); ?></span>
                <span class="text text-2"><?= $_SESSION['myuser']; ?></span>
            </div>
        </div>
        <i class="fa-solid fa-xmark close"></i>

        <div class="progress" style="background-color:<?php echo htmlspecialchars($_SESSION['papi'] ?  : '#f44040'); ?>"></div>
    </div>

<?php
    unset($_SESSION['papi']);
    endif;
?> 