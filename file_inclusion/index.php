<?php

// set 'allow_url_fopen'op 1 in php.ini;
// set 'allow_url_include'op 1 in php.ini;

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-12-17
 * Time: 13:16
 */

//Database connection
include("../db.php");

$include_file = false;
if (isset($_GET['file'])) {
    $file_to_include = $_GET['file'];
    $include_file = true;
}
?>


<?php include('../layout/header.php'); ?>

<h1>File Inclusion</h1>
<h3>Local File inclusion</h3>
<p>
    Je kunt de inhoud van een file embedden in deze pagina. Zet achter de url van deze pagina ?file= het pad naar het bestand dat je wil embedden.
    Meer informatie over local file inclusion... <a href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">OWASP Local File Inclusion</a>
</p>
<h3>Remote File inclusion</h3>
<p>
    Je kunt de inhoud van een remote file embedden in deze pagina. Zet achter de url van deze pagina ?file= het pad naar het bestand dat je wil embedden.
    Als je een link kunt maken naar een externe website, dan heb je te maken met een security probleem in de configuratie van je webserver!
    Meer informatie over remote file inclusion... <a href="https://www.owasp.org/index.php/Testing_for_Remote_File_Inclusion">OWASP Remote File Inclusion</a>
</p>

<?php
if ($include_file) {
    include($file_to_include);
}

?>

<?php include('../layout/footer.php'); ?>