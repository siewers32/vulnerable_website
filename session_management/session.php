<?php

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 06-12-17
 * Time: 09:51
 */

session_start();

include("../layout/header.php");
include("nav.php");

include("../db.php");

$query = "SELECT * FROM userplainpasswords WHERE name = '" . $_POST["voornaam"] . "' and password = '" . $_POST["wachtwoord"] . "'";

//Eventuele errors worden weergegeven
$result = mysqli_query($link, $query);

echo "<br>" . $query . "<br>";

$rows = mysqli_fetch_all($result); // MYSQLI_BOTH
if (count($rows)) {
    foreach ($rows as $row) {
        echo "<h3>Welkom " . $row[1]
            //.$row[0]." ".$row[2]
            . "</h3><br>";
        $_SESSION["login"] = true;
    }
} else {
    echo "<h3>Geen toegang</h3>";
}


?>

<?php include("../layout/footer.php"); ?>
