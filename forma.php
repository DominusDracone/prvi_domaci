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
        
        <h1 class="h3 mb-3 fw-normal">Ko će nam se pridružiti?</h1>
    
        <div class="fieldset-1">
        <form method="post" id="dodajForm">
            <label for="Slika">Slika</label>
            <input type="text" class="form-control" id="slika" placeholder="slika" name="slika">
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="ime" placeholder="Ime" name="ime">
          <label for="Ime">Ime</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="prezime" placeholder="Prezime" name="prezime">
          <label for="Prezime">Prezime</label>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control" id="godine" placeholder="Godine" name="godine">
          <label for="Godine">Godine</label>
        </div>
        
        <fieldset class="fieldset-1">
            <legend>Pol:</legend>

                <div>
                    <input type="radio" id="musko" name="pol" value="musko" checked >
                    <label for="huey">Muško</label>
                </div>
                <div>
                    <input type="radio" id="zensko" name="pol" value="zensko" unchecked>
                    <label for="huey">Žensko</label>
                </div>
        </fieldset>
        <fieldset class="fieldset-1">
            <legend>ljstatus:</legend>

                <div>
                    <input type="radio" id="Muž/Žena" name="ljstatus" value="Muž/Žena" checked>
                    <label>Muž/Žena</label>
                </div>
                <div>
                    <input type="radio" id="Ljubanik/Ljubavnica" name="ljstatus" value="Ljubanik/Ljubavnica" unchecked>
                    <label>Ljubanik/Ljubavnica</label>
                </div>
                <div>
                    <input type="radio" id="FWB" name="ljstatus" value="FWB" unchecked>
                    <label>FWB</label>
                </div>
                <div>
                    <input type="radio" id="Povremena zabava" name="ljstatus" value="Povremena zabava" unchecked>
                    <label>Povremena zabava</label>
                </div>
        </fieldset>
        <div class="fieldset-1">
             <label>Rođendan:</label>
            <input type="date" id="rodjendan" name="rodjendan" value="2018-07-22" min="1970-01-01" max="2024-12-31">
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit" id="btnDodaj">Zapamti</button>
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