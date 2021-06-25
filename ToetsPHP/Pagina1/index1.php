<?php session_start();
if(!isset($_SESSION['UserData']['Username'])){
    header("location:login.php");
    exit;
}
echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
Je vindt het Gerecht: <?php echo $_POST['lekkereten'];?> erg lekker!<br/>
Je houdt van de Muziek : <?php echo $_POST['muziek'];  ?> Wat een geweldige smaak!<br/>
Je houdt van de Game   : <?php echo $_POST['Game'];  ?> Wat een geweldige game!<br/>
Je houdt van het Dier   : <?php echo $_POST['Dier'];  ?> Wat een schattig dier of niet soms<br/>
Je houdt van de Kleur  : <?php echo $_POST['Kleur']; ?> Wat een mooie kleur zeg<br/>
</body>
</html>