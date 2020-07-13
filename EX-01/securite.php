<?php
session_start();
var_dump($_POST);
echo $_POST["password"];
if($_POST["password"] == "2020"){
    $_SESSION ["id"] = $_POST["name"];
    setcookie("id",$_SESSION["id"]);
}

else {
    echo "Mauvais couple identifiant / Mot de passe";
    echo "<a href=\"connexion.php\">Page Connexion</a>";

}
?>
    <ul id="nav">
    <li><a href="mini-site-routing.php">Page Accueil</a></li>
    <?php
            function connected_data() {    
                $servername = "localhost"; 
                $username = 'root';    
                 $password = 'root'; 
                 $databasename = "base-site-rooting"; 
             try {      
                   $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
                   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                  
                   echo "<h3>Connected successfully<h3/>";   
          
             }  
                    catch (PDOException $e) {        
                        echo "<h3>Connection failed</h3>". $e->getMessage();  
                          } 

  $sth->excecute(array('admin','login'));
  $login =$sth->fetchAll();

  $sth->execute(array('2020', 'password'));
  $password= $sth->fetchAll();
     }

$pdo=connected_data();


  
    ?>
