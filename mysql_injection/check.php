<?php

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 04-12-17
 * Time: 16:21
 */

include("../db.php");
//Definieer query op basis van userinput (onveilig)
$query = "SELECT * FROM userplainpasswords WHERE name = '" . $_POST["voornaam"] . "' and password = '" . $_POST["wachtwoord"] . "'";

//Eventuele errors worden weergegeven
$result = mysqli_query($link, $query);
if (!mysqli_query($link, $query)) {
    printf("Errormessage: %s\n", mysqli_error($link));
}


include("../layout/header.php");
?>

<h1>MySQL Injection</h1>
<ul>
    <li><a href="index.php">MySQL Injection home</a></li>
</ul>

<?php
//Optioneel de query weergeven:
// echo "<p>Query: " . $query . "</p>";

//Geef resultaten uit database weer
$rows = mysqli_fetch_all($result); // MYSQLI_BOTH
if (count($rows)) {
    foreach ($rows as $row) {
        echo "<h3>Welkom " . $row[1]
            //.$row[0]." ".$row[2]
            . "</h3><br>";
    }
} else {
    echo "<h3>Geen toegang</h3>";
}



include("../layout/footer.php");
