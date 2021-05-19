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

    $users = $mysql->query("SELECT * FROM `users`");
    //print_r($users);
    // while ($row = $users->fetch_assoc()) {
    //     echo "Id: " . $row['id'] . "| " . "Name: " . $row['name'] . "| " . "Bio: " . $row['bio'] . "<br>";
    // }
    ?>

    <div class="user_info_block">
        <div class="table_block">
            <table>
                <tr>
                    <td class="id_row"><b>Id</b></th>
                    <td><b>Name</b></th>
                    <td><b>Bio</b></th>
                    <td>
                        </th>
                    <td>
                        </th>
                </tr>
                <?php
                while ($row = $users->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='id_row'>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['bio'] . "</td>";
                    echo "<td><form action='UserCRUDService.php' method='post'>";
                    echo "<input type='hidden' name='deleteId' value='" . $row['id'] . "'>";
                    echo "<input type='submit' value='X' name='deleteUser'>";
                    echo "</form></td>";
                    echo "<td><form action='EditUser.php' method='post'>";
                    echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                    echo "<input type='hidden' name='name' value='" . $row['name'] . "'>";
                    echo "<input type='hidden' name='bio' value='" . $row['bio'] . "'>";
                    echo "<input type='submit' value='Edit'>";
                    echo "</form></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        <div class="buttonBlock">
            <button type="button" class="addUser" onclick="toogleAddUser()">Add User</button>
        </div>
        <div class="createUserBlock">
            <form action="UserCRUDService.php" method="post" class="userCreateForm" id="userCreateForm">
                <input type="text" name="name" placeholder="name" class="inputName"><br><br>
                <textarea name="bio" placeholder="bio" class="inputBio"></textarea><br><br>
                <input type="submit" value="create" name="createUser">
            </form>
        </div>
    </div>


    <?php
    $mysql->close();
    // print_r($_POST);  
    ?>

    <script type="text/javascript">
        function toogleAddUser(){
            var userCreateForm = document.getElementById("userCreateForm");
            var userCreateFormClass = userCreateForm.className;
            if(userCreateFormClass == "userCreateForm") {
                userCreateForm.className = "userCreateFormOn";
            } else {
                userCreateForm.className = "userCreateForm";
            }
        }


        function howToPlay(){
    	      var tutorial_image_block = document.getElementById("tutorial_image_block");
    	      tutorial_image_block.className = "tutorial_image_block_on";
       }
       function closeTutorial(){
    	   var tutorial_image_block = document.getElementById("tutorial_image_block");
    	   tutorial_image_block.className = "tutorial_image_block_off";
       }

    </script>

</body>

</html>