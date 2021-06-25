<?php session_start();
if(isset($_POST['Submit'])){
    $logins = array('Pjotr' => 'Pjotr123','Rick' => 'Rick123','Bonk' => 'Bonk123');

    $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    if (isset($logins[$Username]) && $logins[$Username] == $Password){
        $_SESSION['UserData']['Username']=$logins[$Username];
        header("location:index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>PHP toets</h1>

<form action="" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
        <tr>
            <td colspan="2" align="center" valign="top"></td>
        </tr>
        <tr>
            <td align="right" valign="top">Naam</td>
            <td><input name="Username" type="text" class="Input"></td>
        </tr>
        <tr>
            <td align="right">Wachtwoord</td>
            <td><input name="Password" type="password" class="Input"></td>
        </tr>
        <tr>
            <td> </td>
            <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
        </tr>
    </table>
</form>
</body>
</html>
