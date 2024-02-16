<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wawy | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="logo" src="assets/logo.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link me-3" aria-current="page" href="#">Hoe werkt het?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link me-3" href="#">Over ons</a>
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
            <div class="col-md-6" id="leftside">
                <div class="d-flex">
                    <div>
                        <h1>Ontdek je smaak</h1>
                        <h1>én jezelf!</h1>
                        <br>
                        <h3>Een test die je meer leert</h3>
                        <h3>dan je denkt te weten.</h3>
                        <a href="test.php" class="linkje">
                            <button type="button" class="btn btn-warning mt-4 d-flex align-items-center">
                                Start
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6" id="rightside">
                <div class="d-flex">
                    <div>
                        <img src="assets/wizard.png" class="wizard" alt="wizard">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>