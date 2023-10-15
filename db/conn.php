<?php 
    $host = "localhost";
    $db = "attendance_db";
    $user = "root";
    $pass = "";
    $charset = "utf8mb4";


   /* $host = "sql310.infinityfree.com";
    $db = "if0_35096201_attendance_db";
    $user = "f0_35096201";
    $pass = " 59U3Z3aR0c94S ";
    $charset = "utf8mb4";*/

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once "crud.php";
    require_once "user.php";
    $crud = new crud($pdo);
    $users = new user($pdo);
   
    $users->insertUser("admin","password");
?>