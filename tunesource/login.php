
<?php session_start();  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php 
        $state = $_GET['state'] ?? '';
        // lay state o tren url xuong 
        $state = trim($state);
    ?>
    <div class="row">
        <div class="col-sm-12 col-md-6 offset-3">
            <?php if($state === 'fail'): ?>
                <h5 class="text-center text-danger my-2"> Account invalid </h5>
            <?php endif; ?>
            <?php if($state === 'error'): ?>
                <h5 class="text-center text-danger my-2"> enter username and password, please ! </h5>
            <?php endif; ?>
            <form class="border p-3 mt-3" action="handleLogin.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button name="btnLogin" type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>

</html>