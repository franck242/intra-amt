
<?php 
session_start();
print_r($_POST);
if ($_POST["login"]== "") {
    $_SESSION['erreur']= "login non saisie";
    header('Location: http://localhost/intra-amt/formulaire.php');die;
    
}r

if ($_POST["password"]== "") {
    $_SESSION['erreur']= "mot de passe non saisie";
    header('Location: http://localhost/intra-amt/formulaire.php');die;
    
}


$login =$_POST["login"];
$password =$_POST["password"];
$typesaccounts =$_POST["typesaccounts"];
$_SESSION['comptes'] = $_POST["typesaccounts"];

$_SESSION['login'] =$_POST["login"];
$_SESSION['color']= $_POST["Couleursheader"];
$_SESSION['nav']= $_POST["courleursnavigation"];



if(filter_var($login, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
  }else{
    echo "L'adresse e-mail n'est pas valide";
}



    header('Location: http://localhost/intra-amt/user.php');

 





?>