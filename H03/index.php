<html>
<head>
    <title>PHPH02</title>
    <style>
        body {
            text-align:center;
        }
        .rood {
            border: red solid 5px;
        }

        .groen {
            border: green solid 5px;
        }
    </style>

</head>
<body>
<?php
for($i = 1; $i<=9; $i++){
    if($i % 2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo"<img src='Foto/Boom".$i.".jpg'>";
}
?>


<br>
<br>
<br>
<?php
for($i = 0; $i<=9; $i++){
    for($j = 0; $j<$i; $j++) {
        echo "*";
    }
    echo "*<br>";
}
?>

<br>
<br>
<br>

<?php
for($i = 1; $i<=9; $i++){
    echo"<img src='Foto/aap".$i.".jpg'>";
}
?>

<br>
<br>
<br>
<?php
$leeftijd = 10;
$bedrag = 10;
if($leeftijd  > 65) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd <= 12) {
    $bedrag = $bedrag * 0.5;
}
if($leeftijd < 3) {
    $bedrag = 0;
}

echo "de prijs is $bedrag";
?>

<br>
<br>
<br>

<?php

$a = 25;
$b = 32;
$c = 11;
$d = 23;

?>

<table border="1">
    <tr>
        <th>
            De spartelkuikens
        </th>
        <th>
            <?php
            echo $a;
            ?>
        </th>
        <th>
            <?php
            for ($i = 1; $i <= $a/5; $i++) {
                echo "<img src='../H03/Foto/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>
            De Waterbuffels
        </th>
        <th>
            <?php
            echo $b;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $b/5; $i++){
                echo "<img src='../H03/Foto/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>
            Plonsmderin
        </th>
        <th>
            <?php
            echo $c;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $c/5; $i++){
                echo "<img src='../H03/Foto/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>
            Bommetje
        </th>
        <th>
            <?php
            echo $d;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $d/5; $i++){
                echo "<img src='../H03/Foto/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
</table>

<br>
<br>
<br>

<?php
$afspraak = "";
$tijd = "";
$kappersagenda = array($tijd = "9.15"=> $afspraak = "Mevr. Pietersen", $tijd = "9.30"=> $afspraak = "Mevr. Willems", $tijd = "9.45"=> $afspraak = "", $tijd = "10.00"=> $afspraak = "Paul van den Broek", $tijd = "10.15"=> $afspraak = "Karel de Meeuw", $tijd = "10.30"=> $afspraak = "");
print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach ($kappersagenda as $tijd => $afspraak) {
    if($afspraak == "") {
        print("<li>".$tijd."</li>");
    }
}
print("</ul>");
?>
</body>
</html>