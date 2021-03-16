<?php 
session_start();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire d'authentification</title>
</head>

<body>
    <h1>Authentification</h1>
    <?php if(isset($_SESSION['erreur']) ) {
     echo $_SESSION['erreur'];
    }
    ?>
    <form action="authentification.php" method="post">
        <label for="">login</label>&nbsp;&nbsp;&nbsp;
        <input type="email" placeholder="enter login" name=login><br/>
      
    
        <label for="password">password</label>&nbsp;&nbsp;&nbsp;
        <input type="password" placeholder="entry password" name="password "><br/>
        <label for="types de comptes">types de comptes</label>&nbsp;
        <input type="radio" name="typesaccounts" value="admin"><label for="admin">Admin</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="typesaccounts" value="simple"><label for="simple">Simple</label><br/>

        <label for="Couleursheader">Couleurs header</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="Couleursheader" value="#F30505"><label for="rouge ">rouge</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="Couleursheader" value="#0B730B"><label for="simple ">vert</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="Couleursheader" value="#EBEE00"><label for="simple ">jaune</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="Couleursheader" value="#006CEE"><label for="simple ">bleu</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="Couleursheader" value="#16181A"><label for="simple ">noir</label><br/>

        <label for="Couleursnavigation">Couleurs navigation</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="courleursnavigation" value="#F30505"><label for="rouge ">rouge</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="courleursnavigation" value="#0B730B"><label for="simple ">vert</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="courleursnavigation" value="#EBEE00"><label for="simple ">jaune</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="courleursnavigation" value="#006CEE"><label for="simple ">bleu</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="courleursnavigation" value="#16181A"><label for="simple ">noir</label><br/>

        <button type="submit">envoyer</button>
    </form>
    <?php if(isset($_SESSION['comptes']) ) {

            header('Location: http://localhost/intra-amt/user.php');
            

     } ;?>

</body>

</html>