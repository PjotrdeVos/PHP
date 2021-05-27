<?php

echo $_POST['naam'];
echo "<br>";
echo $_POST['adres'];
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['wachtwoord'];

if ($_POST['naam'] == "") {
    echo "Vul in!";
    echo ">Vul in!</a>";
};

if ($_POST['adres'] == "") {
    echo "Vul in!";
    echo ">Vul in!</a>";
};

if ($_POST['email'] == "") {
    echo "Vul in!";
    echo ">Vul in!</a>";
};

if ($_POST['wachtwoord'] == "") {
    echo "Vul in!";
    echo ">Vul in!</a>";
};