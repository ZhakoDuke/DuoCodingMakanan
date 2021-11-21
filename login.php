<?php 
if( isset($_POST["submit"]) ) {
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
        header("Location: index.php");
        exit;
    } else {
        $error = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        table {
            font-family: cursive;
        }
    </style>
</head>
<body>
    <h1>Silahkan Login</h1>

    <?php if( isset($error) ) : ?>
    <p style="font-family: cursive; color: red;">Username & Password Salah!</p>
    <?php endif; ?>

    <form action="" method="POST">
    <table>
        <tr>
        <td><label for="username">Username </label></td>
        <td>:</td>
        <td><input type="text" name="username" id="username"><td>
        </tr>
        <tr>
        <td><label for="password">Password </label></td>
        <td>:</td>
        <td><input type="password" name="password" id="password"><td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Login!</button></td>
        </tr>
    </table>
    </form>
</body>
</html>