<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstname"]);
    $lastname = $_POST["lastname"];
    $favpet = $_POST["favouritepet"];

    echo "These are user names and email addresses";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favpet;
}
