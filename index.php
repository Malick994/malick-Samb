<?php 
include 'header.php';
 ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">SeneChat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="note.php">Notification</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Compte
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="login.php">S'identifier</a>
          <a class="dropdown-item" href="inscrip.php">Creer un Compte</a>
         
      </li>
    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<?php 
// Récupération des posts depuis la table "posts"
        $sql = "SELECT * FROM posts ORDER BY id_p DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Affichage des posts
            while ($row = $result->fetch_assoc()) {
                $post_id = $row['id_p'];
                $titre = $row['titre'];
                $contenu = $row['contenu'];
                $photo = $row['photo'];
                $likes = 0; // À implémenter (récupération du nombre de likes depuis une autre table)
                $comments = array(); // À implémenter (récupération des commentaires depuis une autre table)
                
                echo '<div class="post">';
                echo '<h4>' . $titre . '</h4>';
                echo '<p>' . $contenu . '</p>';
                if (!empty($photo)) {
                    echo '<img src="uploads/' . $photo . '" class="img-fluid" alt="Image">';
                }
                echo '<div class="actions">';
                echo '<button class="btn btn-secondary">J\'aime (' . $likes . ')</button>';
                echo '<button class="btn btn-secondary">Commenter (' . count($comments) . ')</button>';
                echo '<button class="btn btn-secondary">Partager</button>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'Aucun post disponible.';
        }
        
 ?>
 <?php 
include 'footer.php';
  ?>