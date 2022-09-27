<?php

if (isset($_GET["error"])) {
    if($_GET["error"] == "emptyinput"){
             echo '<p>you did not fill in the form</p>';
    } else if ($_GET["error"] == "invaliduid") {
        echo '<p>invalid</p>';
    } else if ($_GET["error"] == "wronglogin") {
        echo '<p>wrong login</p>';
    } else if ($_GET["error"] == "invalidemail") {
        echo '<p>invalid mail</p>';
    } else if ($_GET["error"] == "passwordsmismatch") {
        echo '<p>passwords are different</p>';
    } else if ($_GET["error"] == "stmtfailed") {
        echo '<p>technical error</p>';
    } else if ($_GET["error"] == "usernametaken") {
        echo '<p>username taken</p>';
    } else if ($_GET["error"] == "none") {
        echo '<p>you have logged in, yay!</p>';
    }
}