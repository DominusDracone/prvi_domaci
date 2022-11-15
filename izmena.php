<?php
  require "model/prijava.php";
  require "dbBroker.php"; 
    $podaci = Prijava::getByIdPrijava($_POST['ljubId'], $conn);
    $pom = PrijavaS::getByIdSlike($_POST['ljubId'], $conn);
    $slika = "slikePartnera/{$pom[0]['imeslike']}.jpg";
    $id = $_POST['ljubId'];
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
    <title>Forma</title>
    <link href="css/styleForma.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
      <!-- <form> -->
        
        <h1 class="h3 mb-3 fw-normal">Šta želite da promenite?</h1>
    
        <div class="fieldset-1">
        <form method="post" id="izmeniForm">
            <label for="Slika">Slika</label>
            <input type="image" src="<?php echo $slika?>" alt="Submit" width="100" height="100">
            <input type="text" class="form-control" id="slikaIzmena" name="sliakIzmena" value="<?php echo $pom[0]['imeslike'];?>">
            <label for="slika"></label>
        </div>
        <input hidden name="idIzmena" value="<?php echo $id;?>">
        <div class="form-floating">          
          <input type="text" class="form-control" id="imeIzmena" placeholder="Ime" name="imeIzmena" value="<?php echo $ime;?>">
          <label for="Ime">Ime</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="prezimeIzmena" placeholder="Prezime" name="prezimeIzmena" value="<?php echo $prezime;?>">
          <label for="Prezime">Prezime</label>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control" id="godineIzmena" placeholder="Godine" name="godineIzmena" value="<?php echo $godine;?>">
          <label for="Godine">Godine</label>
        </div>
        
        <fieldset class="fieldset-1">
            <legend>Pol:</legend> 
                <div>
                  <label for="pol"><?php echo $pol ?></label>
                </div>             
                <div>
                    <input type="radio" id="muskoIzmena" name="polIzmena" value="Muško" checked>
                    <label for="huey">Muško</label>
                </div>
                <div>
                    <input type="radio" id="zenskoIzmena" name="polIzmena" value="Žensko">
                    <label for="huey">Žensko</label>
                </div>
        </fieldset>
        <fieldset class="fieldset-1">
            <legend>ljstatus:</legend>
                <div>
                  <label for="ljstatus"><?php echo $ljstatus ?></label>
                </div>
                <div>
                    <input type="radio" id="Muž/ŽenaIzmena" name="ljstatusIzmena" value="Muž/Žena" checked>
                    <label>Muž/Žena</label>
                </div>
                <div>
                    <input type="radio" id="Ljubanik/LjubavnicaIzmena" name="ljstatusIzmena" value="Ljubanik/Ljubavnica">
                    <label>Ljubanik/Ljubavnica</label>
                </div>
                <div>
                    <input type="radio" id="FWBIzmena" name="ljstatusIzmena" value="FWB" >
                    <label>FWB</label>
                </div>
                <div>
                    <input type="radio" id="Povremena zabava Izmena" name="ljstatusIzmena" value="Povremena zabava">
                    <label>Povremena zabava</label>
                </div>
        </fieldset>
        <div class="fieldset-1">
             <label>Rođendan:</label>
            <input type="date" id="rodjendanIzmena" name="rodjendanIzmena" value="<?php echo $rodjendan;?>" min="1970-01-01" max="2024-12-31">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" id="btnPromeni">Zapamti</button>
  </form>
       
        
        <a href="lista.php"><button class="w-100 btn btn-lg btn-primary">Nazad</button></a>
      <!-- </form> -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>