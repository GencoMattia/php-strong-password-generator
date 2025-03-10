<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <main>
        <section>
            <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { ?>
                <h1>
                    Welcome <?php echo $_SESSION["username"]?>
                </h1>
                <a href="./src/logout.php">
                    Log out here!
                </a>
            <?php } else { ?>
                <h1>
                    "Please log in with your credentials"
                </h1>
                <a href="./src/login.php">
                    Log in here!
                </a>
            <?php } ?>
        </section>
    </main>
</body>
</html>