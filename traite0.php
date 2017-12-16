<?php
     session_start();
     extract(($_POST));
     if(isset($valide)){
         if($perso=="admin" AND $pass=="admin"){
       	$_SESSION['admin']="admin";

        header('location: admin.php');
    }
    else if($perso=="user" AND $pass=="user"){
    	$_SESSION['user']="user";
        header('location: user.php');
    }
    else{
    	echo "veuillez saisir les champs correctements";
    }
}
 ?> 