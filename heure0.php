<?php
session_start();
 echo '<form method="post" action="user.php"><input type="submit"  name="dec"value="deconnexion"/>
</form>';
extract($_POST);
if(!$_SESSION['user']){
    header('location:formulaire0.php');
}else{
if(isset($dec)){
    session_destroy();
    
    header('location: formulaire0.php');
    
}
}
 $datetime = date("Y-m-d H:i:s");
 echo $datetime;
if(isset($dec)){
session_destroy();
    header('location: formulaire0.php');
    
}

 
?>