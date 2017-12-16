<?php
session_start();
if(!$_SESSION['admin']){
    header('location:formulaire0.php');
}else{
extract($_POST);
echo '<form method="post" action="tableau.php"><input type="submit"  name="dec"value="deconnexion"/>
</form>';
if(isset($dec)){
    session_destroy();
    
    header('location: formulaire0.php');}
    
}
?>
<html>
    <head>
        <title>tableau</title>
    </head>
    <body>
        <?php
        $tab=array(array("001","niass","35"),array("002","diop","45"),array("003","ndiaye","85"));
       echo  "<table border=\"1\" width=500 height=500 >";
       echo "<tr>";
       echo "<th align=center>code</th>";
       echo "<th align=center>nom</th>";
       echo "<th align=center>age</th>";
       echo "<th align=center>lien</th>";
       
       if(isset($_POST['valide'])){
        extract($_POST);
        for($i=0;$i<3;$i++){
            $tab[$i][1]=$nom;
            $tab[$i][2]=$age;
            break;
            
        }
    }

       echo "</tr>";
       for($i=0;$i<3;$i++){
           echo "<tr>";
         for($j=0;$j<3;$j++){
             echo "<td>";
             echo $tab[$i][$j];
             echo "</td>";
         }