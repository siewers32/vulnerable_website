<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 09:51
 */




session_start();
session_regenerate_id();

//print_r($_SERVER);

$_SESSION['REMOTE_ADDR']= getenv('REMOTE_ADDR');
$_SESSION['HTTP_USER_AGENT']= $_SERVER['HTTP_USER_AGENT'];

include("../layout/header.php"); ?>

<?php
include("nav.php");

?>
<form action="session.php" method="POST">
    Login <input type="text" name="voornaam"><br>
    Password <input type="password" name="wachtwoord"><br>
    <input type="submit"><br>
</form>

<a href="session.php">session.php</a>
<?php include("../layout/footer.php"); ?>
