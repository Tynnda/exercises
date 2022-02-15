<?php if ($message = Session::instance()->get('success_message')) : ?>

    <div class="message success-message">
        <?= $message ?>
    </div>

<?php endif; ?>

<?php if ($errors = Session::instance()->get('errors')) : ?>
    <?php foreach ($errors as $error) : ?>

        <div class="message error-message">
            <?= $error ?>
        </div>

    <?php endforeach; ?>
<?php endif; ?>