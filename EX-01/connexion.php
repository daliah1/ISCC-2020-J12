<!DOCTYPE html>
<html>
 
<form method="POST" action="securite.php">
 
 <div>
 <label for="username">Veuillez chosir un nom d'utilisateur:</label>
 <input type="text" id="username" name="name">
</div> 

 <label for="userPassword">Mot de passe:</label>
 <input type="password" id="userPassword"  name="password">

<div>
 <input type="submit" value="next">
</div>
<!DOCTYPE html>
<html>
<title>Connexion</title>
<meta charset="utf-8">
<body>
    <h2>Connexion</h2>
<form method="POST" action="securite.php">
    <label for="login">Login</label>
<div id="login">
    <input type="text" name="login" id="login">
</div>
    
    <label for="password">Password</label>
<div id="password">
    <input type="text" name="password" id="password">
</div>
<input type="submit" value="Envoyer">
</form>
    </body>
</html>


 
