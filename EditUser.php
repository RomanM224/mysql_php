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
    
    <div class="user_info_block">
        <div class="createUserBlock">
            <form action="UserCRUDService.php" method="post">
                <?php
                echo "<input type='hidden' name='id' value='" . $_POST['id'] . "'><br><br>";
                echo "<input type='text' class='inputName' name='name' value='" . $_POST['name'] . "'><br><br>";
                echo "<textarea name='bio' class='inputBio'>" . $_POST['bio'] . "</textarea><br><br>";
                echo "<input type='submit' value='Edit' name='editUser'>";
                ?>
            </form>
        </div>
    </div>

</body>

</html>