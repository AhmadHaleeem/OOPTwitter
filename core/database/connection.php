<?php
ob_start();
    $dsn = 'mysql:host=twitter.host;dbname=tweety';
    $user = 'ahmad';
    $pass = '123123';

    try {
        $pdo = new PDO($dsn, $user, $pass);
    }
    catch (PDOException $e) {
        echo "Connection failed " . $e->getMessage();
   }

ob_end_flush();