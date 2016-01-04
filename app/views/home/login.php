<?php require_once __DIR__ . '/../main/header.php'; ?>

<div>
    <h2>Enter to the admin panel</h2>
    <form enctype="multipart/form-data" method="POST" name="loginform"  action="login.php" >
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <input type="submit">
    </form>
        <?php
        if ($data['validate'] == FALSE) { ?>
    <p>
            Bad login or pasword
    </p>
       <?php } ?>
</div>

<?php require_once __DIR__ . '/../main/footer.php'; ?>


