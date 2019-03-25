<?php session_start();

require __DIR__ . '../../vendor/autoload.php';

Modules\PhpDotEnv::load();

// $sql = "SELECT * FROM users";
// $query = $db->connect()->prepare($sql);
// $query->execute();
// $user = $query->fetch(\PDO::FETCH_OBJ);

// var_dump($user);
// die();



try {
    if (isset($_SESSION['user'])) {
        // header('location: views/sineup.view.html');
    } else {
        require 'views/sineup.view.html';
    }
} catch (\Exception $err) {
    echo $err->getMessage();
}
