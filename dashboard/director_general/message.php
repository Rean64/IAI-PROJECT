<div class="toast-container">
    <?php if (isset($_SESSION['notificationsd'])): ?>
        <?php foreach ($_SESSION['notificationsd'] as $notification): ?>
        <div class="toasts">
            <div class="toasts-content">
                <i class="fas fa-solid <?= htmlspecialchars($notification['icon']); ?> check"></i>
                <div class="message">
                    <span class="text text-1"><?= htmlspecialchars($notification['title']); ?></span>
                    <span class="text text-2"><?= htmlspecialchars($notification['content']); ?></span>
                </div>
            </div>
            <i class="fa-solid fa-xmark close"></i>
            <div class="progress" style="background-color:<?= htmlspecialchars($notification['color']); ?>"></div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?php
// Clear session notifications
unset($_SESSION['notificationsd']);

?>