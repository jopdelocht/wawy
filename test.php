
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eat magic!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Welkom!</h2>
                <p>Vul de vragenlijst in, zonder te twijfelen. Trust your guts!</p>

                  <form action="submit.php" method="POST">


                      <h2>In wat voor omgeving werk of studeer je het liefst?</h2>
                      <input type="radio" name="environment" value="A"> Een drukke, sociale omgeving<br>
                      <input type="radio" name="environment" value="B"> Een rustige, geconcentreerde omgeving<br>
                      <br>


                      <h2>Welke activiteiten doe je het liefst? </h2>
                      <input type="radio" name="activity" value="B"> Rustig en ontspannend<br>
                      <input type="radio" name="activity" value="A"> Actief en avontuurlijk<br>
                      <br>


                      <h2>Wat doe je het liefst als je gestrest bent? </h2>
                      <input type="radio" name="stress" value="A"> Met iemand erover praten<br>
                      <input type="radio" name="stress" value="B"> Tijd alleen nemen om na te denken<br>
                      <br>


                      <h2>Heb je liever een paar close vrienden of een groot netwerk van kennissen? </h2>
                      <input type="radio" name="social" value="B"> Een paar close vrienden<br>
                      <input type="radio" name="social" value="A"> Een groot netwerk van kennissen<br>
                      <br>


                      <h2>Waar vertrouw je meer op bij het nemen van een moeilijke beslissing?</h2>
                      <input type="radio" name="decision" value="C"> Je buikgevoel<br>
                      <input type="radio" name="decision" value="D"> Alle mogelijke uitkomsten, feiten, cijfers en data<br>
                      <br>


                      <h2>Wat vind je leuker? </h2>
                      <input type="radio" name="hobby" value="D"> Denkspelletjes<br>
                      <input type="radio" name="hobby" value="C"> Creatief bezig zijn<br>
                      <br>
                      

                      <h2>Betrap je jezelf erop dat je overdreven reageert of van streek raakt over onbenullige dingen?</h2>
                      <input type="radio" name="reaction" value="C"> Ja<br>
                      <input type="radio" name="reaction" value="D"> Nee<br>
                      <br>
                      

                      <h2>Wat zou je liever zijn: </h2>
                      <input type="radio" name="preference" value="D"> Intelligent<br>
                      <input type="radio" name="preference" value="C"> Empathisch<br>
                      <br>
                      
                      <input type="submit" name="submit" value="Submit">
                      <input type="reset" name="reset" value="Reset">
                  </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>


