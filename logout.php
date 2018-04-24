<?php require 'inc/head.php';
/**
 * Created by PhpStorm.
 * User: wilder14
 * Date: 22/04/18
 * Time: 13:06
 */
if(isset($_SESSION['pseudo'])) {
    session_unset();
    session_destroy();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logout</title>
</head>
<body>
<h1>Vous êtes déconnecté</h1>

</body>
</html>


