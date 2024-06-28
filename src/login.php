<?php 
include_once __DIR__ . "/utilities/array.php";

session_start();

$username = isset($_POST["username"]) ? $_POST["username"] : "null";

$password = isset($_POST["password"]) ? $_POST["password"] : "null";

$isUserFound = false;

foreach($users as $key => $user) {
    if( $username === $user["username"] && $password === $user["password"] ) {
        $isUserFound = true;
        echo "Login Successful";
        break;
    }
};

if ($isUserFound) {
    $_SESSION["username"] = $_POST["username"];
} else {
    echo "No user with these credentials found!"; 
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
        </section>
    </main>
</body>
</html>