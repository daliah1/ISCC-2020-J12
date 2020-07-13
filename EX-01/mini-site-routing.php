<!DOCTYPE html>
<html>
    <head>
        <title>Mini Site Routing</title>
</head>
    

<a href="?Page=1"> page 1 </a>
<a href="?Page=2"> page 2 </a>
<a href="?Page=3"> page 3 </a>

 
<?php
    if(isset($_GET["Page"])){

    if($_GET["Page"]=="1")
{
    include("vitrine-accueil.php");
}
    elseif($_GET["Page"]=="2")
{
    include("vitrine-contacts.php");
}
    elseif($_GET["Page"]=="3")
{
    include("vitrine-programme.php");
}
}
?>

<header>
    <ul id="nav">
     <li><a href="connexion.php">Page Connexion</a></li>
</header>

<?php 
     if(isset($_GET["Page"])){
     if ($_GET ["page"]=="connexion.php")
{
    echo "<nav> page connexion ! </nav>";
}
}
if(!isset($_SESSION["id"])){
    if(isset($_COOKIE["id"])){
        $_SESSION["id"] = $_COOKIE["id"];

    }
    else{
        header("Location: <ital>connexion.php</ital>");
    }
}
?>
<?php
    if ($_COOKIE['id'])
    {
    echo'<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/admin.php?page=admin">Page admin</a>';
}
    ?>


    <?php
    if($_GET['page'] == 1){
       echo'<h1>Accueil !</h1>';
       
    }
    elseif($_GET['page'] ==2){
        echo'<h1>Page 2!</h1>';
    }
    elseif($_GET['page'] ==3){
        echo'<h1>Page 3</h1>';
    }
    elseif($_GET ['page'] =='connexion'){
        echo'<h1>Page connexion</h1>';
        include ("connexion.php");
    }
    elseif($_GET['page'] =='admin'){
        echo'<h1>Page admin</h1>';
        include ("admin.php");
    }
    ?>
<form enctype="multipart/form-data" action="admin.php" method="post">
<imput type="hidden" name="MAX_FILE_SIZE" value="2097152"/>
<imput name="userfile" type="file" accept="image/x-png.,image/jpg,image/jpeg" /><br>
<imput name="description" type="text" placeholder="description" /><br>
<imput name="titre" type="text" placeholder="Titre" />
<imput type="submit" value="Envoyer le fichier" />
</form>

<?php
 echo $_FILES;
?>
</body>
<footer>
<?php
    session_start();

    if(isset($_SESSION["id"]))
    {
        echo '<p>Login: '.$_SESSION["id"]. '</p>';
        echo '<p>description: '.$_SESSION["description"]. '</p>';
    }
           else {
             header('http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/connexion.php?page=connexion');
    
    }

  
?>
</footer>
</html>