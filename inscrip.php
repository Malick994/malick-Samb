<?php
include'header.php';
?>
<?php 
if (isset($_POST['ok'])) {
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $mail=$_POST['mail'];
    $password=$_POST['password'];
    $naiss=$_POST['naiss'];
    $genre=$_POST['genre'];

    $sql="INSERT INTO uSER(nom,prenom,mail,password,naiss,genre)VALUES('$nom','$prenom','$mail','$password','$naiss','$genre')";
    $resultat=mysqli_query($conn,$sql);
        if ($resultat) {
            echo "Incription reussie";
        }
}

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap-3/css/bootstrap.min.css">
</head>
<body>
<div class="panel panel-primary col-md-6 col-md-offset-3">
    <div class="panel panel-heading">
        
    <h3><center>FORMULAIRE_Etudiant</center></h3>
    </div>
    <div class="panel panel-body">
        <form class="form" action="profil.php" method="POST">
            <div class="form-group">
            <label class="control-label">
                Nom
            </label>
            <input class="form-control" type="text" name="nom"> 
            </div>
            <div class="form-group">
            <label class="control-label">
                Prenom
            </label>
            <input class="form-control" type="text" name="prenom">  
            </div>
            <div class="form-group">
            <label class="control-label">
                Mail ou Numero
            </label>
            <input class="form-control" type="text" name="mail">   
            </div>
            <div class="form-group">
            <label class="control-label">
                Mot De Passe
            </label>
            <input class="form-control" type="text" name="password">    
            </div>
            <div class="form-group">
            <label class="control-label">
                Date de Naissance
            </label>
            <input class="form-control" type="date" name="naiss">    
            </div>
            <div class="form-group">
            <label class="control-label">
                Sexe
            </label>
            <input type="radio" name="genre" value="M">M
            <input type="radio" name="genre" value="F">F
            </div>
           
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="ok">S'inscrire</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<?php 
include'footer.php';
 ?>