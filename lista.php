<?php

require "dbBroker.php";
require "model/prijava.php";

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}

$podaci = Prijava::getAllPrijava($conn);
$podaciS = PrijavaS::getAllSlike($conn);
if (!$podaci) {
    echo "Nastala je greška pri preuzimanju podataka";
    die();
}
if (!$podaciS) {
  echo "Nastala je greška pri preuzimanju podataka";
  die();
}
if ($podaci->num_rows == 0 || $podaciS->num_rows == 0) {
    echo "Nema novih partnera";
    die();
} 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styleLista.css">



<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Dobrodosli nazad!</h1>
        <p class="lead text-muted"> Šta biste želeli danas?</p>
        <p>
          <a href="forma.php" class="btn btn-primary my-2">Dodaj novog partnera</a>
          <a href="kalendar.php" class="btn btn-secondary my-2">Pogledaj kalendar</a>
        </p>
      </div>
    </div>
  </section>
  <table>
    <tr>
  <?php 
    while ($red = $podaci->fetch_array()) :
      $pom = PrijavaS::getByIdSlike($red['id'], $conn);
      // echo $pom['id'];
      //print_r($pom);
      //echo $pom[0]['imeslike']; //ovo izvlaci ime slike
      $slika = "slikePartnera/{$pom[0]['imeslike']}.jfif";
      //echo $slika;
  ?>
  
  
    <div class="container">
    <form method="post" action="profil.php">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
           <button type="submit"> <img src="<?php echo $slika?>"> </img></button>

           <!-- input:hidden -->
           <!-- sacuvala sesiju ID korisnika i na taj nacin pamtis sta je korisnik izabrao -->
           <!--  $_SESSION['ljubavnikID'] = $red['id'] -->

           <input type="hidden" id="ljubavnikId" name="ljubavnikId" value="<?php echo $red['id']?>">
           <label name = "ime"><?php echo $red['ime']?></label>
            <div class="card-body">
              <p class="card-text"><label name = "status"><?php echo $red['status']?></label></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="kalendar.php"><button type="button" class="btn btn-sm btn-outline-secondary">Zakazi sastanak</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Ukloni osobu</button>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    </div>
    
    
    <?php endwhile;?>
    </tr>
  </table>

        
       
            

</main>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>