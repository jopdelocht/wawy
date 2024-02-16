<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Eat magic!</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img class="logo" src="assets/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link me-3" aria-current="page" href="#">Hoe werkt het?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-3" href="#">
                <i class="fa-solid fa-user fa-sm"></i>
                Login
              </a>
            </li>
            <li class="nav-item">
              <a href="test.php" class="linkje">
                <button type="button" class="btn btn-warning d-flex align-items-center me-3">
                  Start
                </button>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content">
          <h1>Welkom!</h1>
          <h3>Vul de vragenlijst in, zonder te twijfelen. Trust your guts!</h3>
          <br>

          <form action="submit.php" method="POST">

            <h4>In wat voor omgeving werk of studeer je het liefst?</h4>
            <input type="radio" name="environment" value="A"> Een drukke, sociale omgeving<br>
            <input type="radio" name="environment" value="B"> Een rustige, geconcentreerde omgeving<br>
            <br>

            <h4>Welke activiteiten doe je het liefst? </h4>
            <input type="radio" name="activity" value="B"> Rustig en ontspannend<br>
            <input type="radio" name="activity" value="A"> Actief en avontuurlijk<br>
            <br>

            <h4>Wat doe je het liefst als je gestrest bent? </h4>
            <input type="radio" name="stress" value="A"> Met iemand erover praten<br>
            <input type="radio" name="stress" value="B"> Tijd alleen nemen om na te denken<br>
            <br>

            <h4>Heb je liever een paar close vrienden of een groot netwerk van kennissen? </h4>
            <input type="radio" name="social" value="B"> Een paar close vrienden<br>
            <input type="radio" name="social" value="A"> Een groot netwerk van kennissen<br>
            <br>

            <h4>Waar vertrouw je meer op bij het nemen van een moeilijke beslissing?</h4>
            <input type="radio" name="decision" value="C"> Je buikgevoel<br>
            <input type="radio" name="decision" value="D"> Alle mogelijke uitkomsten, feiten, cijfers en data<br>
            <br>

            <h4>Wat vind je leuker? </h4>
            <input type="radio" name="hobby" value="D"> Denkspelletjes<br>
            <input type="radio" name="hobby" value="C"> Creatief bezig zijn<br>
            <br>

            <h4>Betrap je jezelf erop dat je overdreven reageert of van streek raakt over onbenullige dingen?</h4>
            <input type="radio" name="reaction" value="C"> Ja<br>
            <input type="radio" name="reaction" value="D"> Nee<br>
            <br>

            <h4>Wat zou je liever zijn: </h4>
            <input type="radio" name="preference" value="D"> Intelligent<br>
            <input type="radio" name="preference" value="C"> Empathisch<br>
            <br>

            <input type="submit" name="submit" value="Submit" class="btn btn-warning mb-3 submit">
            <input type="reset" name="reset" value="Reset" class="btn btn-warning mb-3 reset">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>