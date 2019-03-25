<?php session_start();

if (isset($_SESSION['user'])) {
    header('location: index.php');
}

foreach ($_POST as $value) {
    if ($value == '') {
        echo '<script>alert("Debe llenar todo el form")</script>';
        require '../views/sineup.view.html';
        break;
    }
}

$username = filter_var(strtolower($_POST['username']), FILTER_SANITIZE_STRING);
$password = $_POST['password'];
$password_repit = $_POST['password_repit'];
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {
    $user = (object)[
        'username' => $username,
        'password' => $password,
        'password_repit' => $password_repit
    ];
}

$db = new Modules\Database('mysql', 'DATABASE');

$sql = "SELECT * FROM users WHERE username = :username LIMIT 1";
$query = $db->connect()->prepare($sql);
$query->execute([
    ':username' => $user->username
]);
$result = $query->fetch(\PDO::FETCH_OBJECT);

if ($result) {

}

var_dump($result);
die;
