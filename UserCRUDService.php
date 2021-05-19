<?php
if (isset($_POST['createUser'])) {
    createUser();
}

if (isset($_POST['deleteUser'])) {
    deleteUser();
}

if (isset($_POST['editUser'])) {
    editUser();
}

function createUser()
{
    $name = $_POST["name"];
    $bio = $_POST["bio"];

    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql->query("SET NAME 'utf8");
    $mysql->query("INSERT INTO `users` (`name`, `bio`) VALUES('$name', '$bio')");
    header('Location: http://localhost/mysql/UserCRUDView.php');

    $mysql->close();
}

function deleteUser()
{
    $id = $_POST["deleteId"];

    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql->query("SET NAME 'utf8");
    $mysql->query("DELETE FROM `users` WHERE `users`.`id` = " . $id);
    header('Location: http://localhost/mysql/UserCRUDView.php');


    $mysql->close();
}

function editUser()
{
    $id = $_POST["id"];
    $name = $_POST["name"];
    $bio = $_POST["bio"];

    $mysql = new mysqli("localhost", "root", "", "php-mysql");
    $mysql->query("SET NAME 'utf8");
    $mysql->query("UPDATE `users` SET `name` = '$name', `bio` = '$bio' WHERE `users`.`id` = '$id'");
    header('Location: http://localhost/mysql/UserCRUDView.php');


    $mysql->close();
}
