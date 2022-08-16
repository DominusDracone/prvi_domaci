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
    
        <div class="fieldset-1">
            <label for="Slika">Slika</label>
            <input type="image" src="" alt="Submit" width="48" height="48">
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="ime" placeholder="Ime">
          <label for="Ime">Ime</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="prezime" placeholder="Prezime">
          <label for="Prezime">Prezime</label>
        </div>
        <div class="form-floating">
          <input type="number" class="form-control" id="godine" placeholder="Godine">
          <label for="Godine">Godine</label>
        </div>
        
        <fieldset class="fieldset-1">
            <legend>Pol:</legend>

                <div>
                    <input type="radio" id="musko" name="pol" value="musko" checked>
                    <label for="huey">Muško</label>
                </div>
                <div>
                    <input type="radio" id="zensko" name="pol" value="zensko" unchecked>
                    <label for="huey">Žensko</label>
                </div>
        </fieldset>
        <fieldset class="fieldset-1">
            <legend>Status:</legend>

                <div>
                    <input type="radio" id="Muž/Žena" name="status" value="Muž/Žena" checked>
                    <label for="huey">Muž/Žena</label>
                </div>
                <div>
                    <input type="radio" id="Ljubanik/Ljubavnica" name="status" value="Ljubanik/Ljubavnica" unchecked>
                    <label for="huey">Ljubanik/Ljubavnica</label>
                </div>
                <div>
                    <input type="radio" id="FWB" name="status" value="FWB" unchecked>
                    <label for="huey">FWB</label>
                </div>
                <div>
                    <input type="radio" id="Povremena zabava" name="status" value="Povremena zabava" unchecked>
                    <label for="huey">Povremena zabava</label>
                </div>
        </fieldset>
        <div class="fieldset-1">
             <label for="start">Rođendan:</label>
            <input type="date" id="rodjendan" name="rodjendan" value="2018-07-22" min="2018-01-01" max="2018-12-31">
        </div>
        
       
        <button class="w-100 btn btn-lg btn-primary" type="submit">Zakaži sastanak</button>
        <button class="w-100 btn btn-lg btn-primary btnIzb " type="submit">Obriši</button>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Izmeni</button>
        <button class="w-100 btn btn-lg btn-primary btnNazad" type="submit">Nazad</button>
        
      </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>