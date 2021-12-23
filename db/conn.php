<?php 
    //Development Connection
     $host = '127.0.0.1';
     $db = 'attendance_db';
     $user = 'root';
     $pass = '';
     $charset = 'utf8mb4';

    //Remote Database Connection
  /*      
    $host = 'bbk78tzxihtu5axlhxfi-mysql.services.clever-cloud.com';
    $db = 'bbk78tzxihtu5axlhxfi';
    $user = 'u2zyguwu7mrpn9ah';
    $pass = 'SF5FMtsxUboQg4utGOn2'; */
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);
   
    $user->insertUser("admin","password");
?>