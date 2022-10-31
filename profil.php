<?php
  
  // require 'lista.php';
  // isset($_SESSION['ljubavnikID'])) == 1 {
    //ljubancik = new Prijava('ljubabnikID');
    // fetch_array(1)
  //}
  $ime = $red['ime'];
  $prezime;
  $godine;
  $pol;
  $status = $_POST['status'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="css/styleProfil.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
      <form>
        
        <h1 class="h3 mb-3 fw-normal">Šta želiš od mene?</h1>
        <form action="#" method="post" id="profilForm">
        <div class="fieldset-1">
            <label for="Slika">Slika</label>
            <input type="image" src="" alt="Submit" width="48" height="48">
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
            <label for="status"><?php echo $status ?></label>
          </div>
        </div>
        </form>
       
        <button class="w-100 btn btn-lg btn-primary" type="submit">Zakaži sastanak</button>
        <button class="w-100 btn btn-lg btn-primary btnIzb " type="submit">Obriši</button>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Izmeni</button>
        <button class="w-100 btn btn-lg btn-primary btnNazad" type="submit">Nazad</button>
        
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>