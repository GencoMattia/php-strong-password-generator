<?php 
include_once __DIR__ . "/utilities/array.php";

session_start();

$username = isset($_POST["username"]) ? $_POST["username"] : "null";

$password = isset($_POST["password"]) ? $_POST["password"] : "null";

$isUserFound = false;
$loginMessage = "";

foreach($users as $key => $user) {
    if( $username === $user["username"] && $password === $user["password"] ) {
        $isUserFound = true;
        break;
    }
};

if ($isUserFound) {
    $_SESSION['logged_in'] = true;
    $_SESSION["username"] = $_POST["username"];
    $loginMessage = "Login Successful";
} else {
    $loginMessage = "No user with these credentials found!"; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <section>
            <form action="" method="post">
                <div class="username-input">
                    <label for="username">
                        Username:
                    </label>
                    <input type="text" name="username" id="username">
                </div>
                <div class="password-input">
                    <label for="password">
                        Password:
                    </label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="button-container">
                    <button type="submit">
                        Log in
                    </button>
                </div>
            </form>
            <div class="login-message">
                <p>
                    <?php echo $loginMessage ?>
                </p>
            </div>
        </section>
    </main>
</body>
</html>