<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
		<form method="POST" action="ajouter.php">
		<h1>BIENVENU CHER UTILISATEUR</h1>
		<table>
			<tr>
                <tr>
                <td>Login</td><td><input type="text" name="login" required></td>
                </tr>
                <tr>
                <td>profil</td><td><input type="text" name="profil" required></td>
                </tr>
                <td>password</td></td><td><input type="password" name="pwd" required></td>
			</tr>
		</table><br>
        <input type="submit" name="submit" value="CONNECTER">
        <a href="ajouter.php">accueil</a>
	</form>
    </center>
    <?php
    extract($_POST);
	$f=fopen("tidiane.txt","r+");
	while(($line=fgets($f))!==false){
		$info=explode(";",$line);
		if($info[0]==$login){
			$existe=true;
			break;}
		}
    ?>
</body>
</html>