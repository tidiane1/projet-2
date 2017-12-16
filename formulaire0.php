<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulaire</title>
</head>
<body>
    <form method="post" action="traite0.php">
        <label>
            <select name="perso">
                <option ></option>
                <option value="user" name="perso">user</option>
                <option value="admin" name="perso">admin</option>
                
            </select>
        </label><br><br>
        <label>
            password: <input type="password" name="pass" >
        </label><br><br><input type="submit" name="valide" value="connexion">

    </form>
    
</body>
</html>