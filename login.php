<?php 
	include 'header.php';
?>	
<?php 
if (isset($_POST['connect'])) {
    
    $mail=$_POST['mail'];
    $password=$_POST['password'];
  
    $sql="INSERT INTO utilisateurs(mail,password)VALUES('$mail','$password')";
    $resultat=mysqli_query($conn,$sql);
        if ($resultat) {
            echo "Connexion reussie";
        }
}

 ?>
<form method="POST" action="profil.php">
	         <div class="mb-3">
	    		<label for="mail" class="form-label">Email Address</label>
	     		 <input type="mail" class="form-control" name="mail">
	    	</div>
	  	
		  <div class="mb-3 ">
		    <label for="password" class="form-label">Password</label>
		    <input type="password" class="form-control" name="password">
		   </div>
	<a href="index.php">
		<button type="submit" class="btn btn-primary" name="connect">Connect</button>
	</a>
     

    </form>

<?php
	include 'footer.php';	
 ?>