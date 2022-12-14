<?php
  require "model/prijava.php";
  require "dbBroker.php";
  // require 'lista.php';
  // isset($_SESSION['ljubavnikID'])) == 1 {
    //ljubancik = new Prijava('ljubabnikID');
    // fetch_array(1)
  //}  
    $podaci = Prijava::getByIdPrijava($_POST['ljubavnikId'], $conn);
    //print_r($podaci); 
    $pom = PrijavaS::getByIdSlike($_POST['ljubavnikId'], $conn);
    $slika = "slikePartnera/{$pom[0]['imeslike']}.jpg";
    //print_r($slika);
    $id = $_POST['ljubavnikId'];
    $ime = $podaci[0]['ime'];
    $prezime = $podaci[0]['prezime'];
    $godine = $podaci[0]['godine'];
    $pol = $podaci[0]['pol'];
    $ljstatus = $podaci[0]['ljstatus'];
    $rodjendan = $podaci[0]['datumRodj'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="css/styleProfil.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
      <form>
        
        <h1 class="h3 mb-3 fw-normal">Šta želiš od mene?</h1>
        <form method="post" id="profilForm">
        
        <div class="fieldset-1">
            <img src="<?php echo $slika?>" width="200" height="200">
        </div>
        <div class="fieldset-1">
          <div>
            <label for="ime"><?php echo $ime ?></label>
          </div>
          <div>
           <label for="prezime"><?php echo $prezime ?></label>
          </div>
          <div>
            <label for="godine"><?php echo $godine ?></label>
          </div>
         <div>
            <label for="pol"><?php echo $pol ?></label>
          </div>
          <div>
            <label for="ljstatus"><?php echo $ljstatus ?></label>
          </div>
          <div>
            <label for="rodjendan"><?php echo $rodjendan ?></label>
          </div>
        </div>
        </form>
       
        <a href="kalendarGoogle.php"><button class="w-100 btn btn-lg btn-primary" type="submit">Zakaži sastanak</button></a>
        <form action="izmena.php" method="post" id="profilIzmenaForm">
          <input hidden id="ljubId" name="ljubId" value="<?php echo $_POST['ljubavnikId']?>">
          <button class="w-100 btn btn-lg btn-primary" type="submit">Izmeni</button>
        </form>

        <a href="lista.php"><button class="w-100 btn btn-lg btn-primary btnNazad">Nazad</button></a>
        
      </form>
      <button class="w-100 btn btn-lg btn-primary btnIzb " onclick="obrisi(<?php echo $id?>)">Obriši</button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    
  </body>
  <!-- bitan komentar -->

  
</html>

