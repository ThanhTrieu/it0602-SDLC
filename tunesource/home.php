
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php $user = $_SESSION["user"] ?? ''; ?>
    <h1> Welcome you <?= $user; ?> ! </h1>
    <form action="logout.php" method="post">
        <button type="submit" name="btnLogout"> Logout </button>
    </form>
</body>
</html>