<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'utilisateur</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<form method="POST" action="ajouter.php">
		<h1>BIENVENU A NOTRE SITE</h1>
		<a href="inscrire.php">SE CONNECTER</a>
		<table>
			<tr>
				<td>Login</td><td><input type="text" name="login" required></td>
			</tr>
			<tr>
				<td>Profil</td>
				<td><select name="profil">
					<option value=""></option>
					<option value="user">User</option>
					<option value="admin">Admin</option>
				</select></td>
			</tr>
		</table><br>
		<input type="submit" name="submit" value="INSCRIRE">
	</form>
	</center>
	<?php
    extract($_POST);
	$f=fopen("tidiane.txt","a+");
	while(($line=fgets($f))!==false){
		$info=explode(";",$line);
		if($info[0]==$login){
			$existe=true;
			break;}
		}
		if($existe){
        echo " le login existe deja";
        }
		else{
			fseek($f,2);
			function Genere_Password($size)
			{
		
				$characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
			
				for($i=0;$i<$size;$i++)
				{
					$password .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
				}
					
				return $password;
			}
			
			$password = Genere_Password(7);
		fputs($f,"$login;$password;$profil\n");
		fclose($f);
		}
	?>
</body>
</html>  