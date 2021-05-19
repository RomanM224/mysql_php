<html>

<head>
    <meta http-equiv="Content-Type" name="viewport" content="text/html; charset=UTF-8 width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="css/styles.css" rel="stylesheet">


</head>

<body>

    <header>
        <a href="Home.php" class="navbar_item">Home</a>
        <a href="UserCRUDView.php" class="navbar_item">Users</a>
    </header>

    <?php
    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql->query("SET NAME 'utf8");

    //  $mysql->query("INSERT INTO `users` (`name`, `bio`) VALUES('John', 'bio info')");

    if ($mysql->connect_error) {
        echo "Error Number: " . $mysql->connect_errno . "<br>";
        echo "Error: " . $mysql->connect_error;
    } else {
        //echo "Host info: " . $mysql->host_info;
        // $mysql->query("DROP TABLE `users`");

        // $mysql->query("CREATE TABLE `users` (
        // id INT(11) NOT NULL AUTO_INCREMENT,
        // name VARCHAR(50) NOT NULL,
        // bio TEXT NOT NULL,
        // PRIMARY KEY(id))
        // ");

    }


    $mysql->close();
    ?>



</body>

</html>