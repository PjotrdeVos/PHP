<?php session_start();
if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Vragenlijst</title>
</head>
<body>

<form action="index1.php" method="post">
    <H2>Formulier</h2>

    <div class="Eten">

        <ul>
            <li>
                <label for="lekkereten" class="label">Favoriete gerecht:</label><br>
                <div class="inut2"><input type="checkbox" name="lekkereten" value="Pizza" />&nbsp;Pizza</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="lekkereten" value="Hamburger" />&nbsp;Hamburger</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="lekkereten" value="Pasta" />&nbsp;Pasta</div>
            </li>

        </ul>
    </div>
    <div class="Muziek">
        <ul>
            <li>
                <label for="Muziek" class="label">Muziek:</label><br>
                <div class="inut2"><input type="checkbox" name="muziek" value="Glitchcore" />&nbsp;Glitchcore</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="muziek" value="hiphop" />&nbsp;hiphop</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="muziek" value="Underground rap" />&nbsp;Underground rap</div>
            </li>

        </ul>
    </div>
    <div class="Game">
        <ul>
            <li>
                <label for="Game" class="label">Game:</label><br>
                <div class="inut2"><input type="checkbox" name="Game" value="Cod" />&nbsp;Cod</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="Game" value="Dead by Daylight" />&nbsp;Dead by Daylight</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="Game" value="Escape from Tarkov" />&nbsp;Escape from Tarkov</div>
            </li>

        </ul>
    </div>
    <div class="Kleur">
        <ul>
            <li>
                <label for="Kleur" class="label">Kleur:</label><br>
                <div class="inut2"><input type="checkbox" name="Kleur" value="Blauw" />&nbsp;Blauw</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="Kleur" value="Groen" />&nbsp;Groen</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="Kleur" value="Rood" />&nbsp;Rood</div>
            </li>

        </ul>
    </div>
    <div class="Dier">
        <ul>
            <li>
                <label for="Dier" class="label">Dier:</label><br>
                <div class="inut2"><input type="checkbox" name="Dier" value="Hond" />&nbsp;Hond</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="Dier" value="Kat" />&nbsp;Kat</div>
            </li>
            <li>
                <div class="inut2"><input type="checkbox" name="Dier" value="Hamster" />&nbsp;Hamster</div>
            </li>

        </ul>
    </div>

    <div class="buttons">
        <input type="submit" name="knop">
        <input type="reset">
    </div>


</body>
</html>