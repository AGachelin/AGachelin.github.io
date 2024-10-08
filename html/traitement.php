<html>
  <head>
    <title>Galerie de Jean-Otter de la strret des famiy</title>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Site de Jean-Loutre</a>
 
      <!-- Bouton affiché uniquement sur mobile pour dérouler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 
      <!-- Les éléments de la navbar -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cv.html">Mon CV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galerie.php">De belles images</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="musique.html">Ce que j'aime</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link" data-toggle="modal" data-target="#contactModal">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Bienvenue sur mon site perso</h1>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-inner">
 
				<?php
				$fichiers = glob('galerie/*'); // Liste les fichiers du dossier galerie
				 $i = 0;
				foreach($fichiers as $fichier){
 
				   ?>
					<div class="carousel-item <?php if($i == 0){ ?>active<?php } ?>">
					  <img class="d-block w-100" src="<?php echo $fichier; ?>" alt="First slide">
					</div>
				   <?php
					$i++;
				}
				?>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
        </div>
      </div>
    </div>
 
    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Contactez moi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-md-6">Jean <b>Loutre</b></div>
              <div class="col-md-6"> <i>Loutre professionnelle</i> </div>
              <div class="col-12">jean.loutre@mail.fr</div>
              <div class="col-12">+33 6 01 01 01 01</div>
              <div class="col-12 text-center">
                <img src="images/qr.png" alt="">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">C'est noté</button>
          </div>
        </div>
      </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </body>
</html>