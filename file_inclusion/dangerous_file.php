<?php

/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-12-17
 * Time: 13:16
 */
?>


<h1>Dangerous file...</h1>
<div style="width:50%;border:1px solid black;padding:8px">
    <div>
        <h3>Log hier in</h3>
        <label for="password">Password</label>
        <input style="position:relative;left:0;top:0;width:200px;" id="password" type="password">
    </div>
    <button id="send" onclick="getpassword()">Verstuur</button>
</div>


<script>
    send = document.getElementById("send")

    function getpassword() {
        pw = document.getElementById("password")
        console.log(pw)
        alert("Thanks for you password buddy! : " + pw.value)
    }
</script>