<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
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
            <div class="col-md-7" id="leftside">
                <div class="d-flex">
                    <div>
                        <?php
                        // Process form submission
                        if (isset($_POST['submit'])) {
                            $environment = $_POST['environment'];
                            $activity = $_POST['activity'];
                            $stress = $_POST['stress'];
                            $social = $_POST['social'];
                            $decision = $_POST['decision'];
                            $hobby = $_POST['hobby'];
                            $reaction = $_POST['reaction'];
                            $preference = $_POST['preference'];
                        }

                        // Display result
                        // echo "Environment: " . $environment;
                        // echo "<br>";
                        // echo "Activity: " . $activity;
                        // echo "<br>";
                        // echo "Stress: " . $stress;
                        // echo "<br>";
                        // echo "Social: " . $social;
                        // echo "<br>";
                        // echo "Decision: " . $decision;
                        // echo "<br>";
                        // echo "Hobby: " . $hobby;
                        // echo "<br>";
                        // echo "Reaction: " . $reaction;
                        // echo "<br>";
                        // echo "Preference: " . $preference;
                        // echo "<br>";

                        //function to calculate score
                        function calculateScore($environment, $activity, $stress, $social, $decision, $hobby, $reaction, $preference)
                        {
                            $countA = 0;
                            $countB = 0;
                            $countC = 0;
                            $countD = 0;
                            if ($environment == "A") {
                                $countA++;
                            } else if ($environment == "B") {
                                $countB++;
                            }
                            if ($activity == "A") {
                                $countA++;
                            } else if ($activity == "B") {
                                $countB++;
                            }
                            if ($stress == "A") {
                                $countA++;
                            } else if ($stress == "B") {
                                $countB++;
                            }
                            if ($social == "A") {
                                $countA++;
                            } else if ($social == "B") {
                                $countB++;
                            }
                            if ($decision == "C") {
                                $countC++;
                            } else if ($decision == "D") {
                                $countD++;
                            }
                            if ($hobby == "C") {
                                $countC++;
                            } else if ($hobby == "D") {
                                $countD++;
                            }
                            if ($reaction == "C") {
                                $countC++;
                            } else if ($reaction == "D") {
                                $countD++;
                            }
                            if ($preference == "C") {
                                $countC++;
                            } else if ($preference == "D") {
                                $countD++;
                            }
                            return array($countA, $countB, $countC, $countD);
                        }

                        $scores = calculateScore($environment, $activity, $stress, $social, $decision, $hobby, $reaction, $preference);
                        // print_r($scores);
                        // echo "<br>";
                        // echo "Your score is: A=" . $scores[0] . ", B=" . $scores[1] . ", C=" . $scores[2] . ", D=" . $scores[3] . ".";
                        ?>

                        <img src="assets/pijl.png" alt="pijl" class="pijl" style="float: right; margin-right: 20px;">
                        <br>
                        <br>
                        <h3>Jouw resultaat:</h3>
                        <?php
                        //conditions to display certain message
                        if ($scores[0] > $scores[1] && $scores[2] > $scores[3]) {
                            echo "
                            <h2>Interactief en inspirerend</h2>
                            Je bent spontaan, energiek en praat graag met anderen. Je bent enthousiast en kunt mensen motiveren en inspireren. Je geniet van sociale activiteiten en bent altijd in voor nieuwe ervaringen.
                            <hr>
                            <b>Je smaakprofiel</b>: Avontuurlijk, gevarieerd en intens
                            <hr>
                            <b>Ons magische voorstel:</b> De mexicaanse taco met gekruid gehakt.
                            ";
                        } else if ($scores[0] > $scores[1] && $scores[2] < $scores[3]) {
                            echo "
                            <h2>Direct</h2>
                            Je bent assertief en zegt waar het op staat. Je bent helder en duidelijk in je communicatie en je houdt van efficiëntie. Je neemt snel beslissingen en bent niet bang om risico's te nemen.
                            <hr>
                            <b>Je smaakprofiel</b>: Helder en uitgesproken
                            <hr>
                            <b>Ons magische voorstel:</b> De fishburger, mét huisgemaakte tartaarsaus!
                            ";
                        } else if ($scores[0] < $scores[1] && $scores[2] > $scores[3]) {
                            echo "
                            <h2>Kiest voor stabiliteit</h2>
                            Je bent kalm, bedachtzaam en je geniet van innerlijke rust. Je bent loyaal en betrouwbaar en je hecht veel waarde aan harmonie en veiligheid. Je bent een goede luisteraar en je hebt oog voor detail.
                            <hr>
                            <b>Je smaakprofiel</b>: Vertrouwd, comfortabel en zacht.
                            <hr>
                            <b>Ons magische voorstel:</b> De kaaskroketburger met meerdere kazen.
                            ";
                        } else if ($scores[0] < $scores[1] && $scores[2] < $scores[3]) {
                            echo "
                            <h2>Conformeel</h2>
                            Je bent plichtbewust, gewetensvol en je houdt van regels en structuur. Je bent serieus en ijverig en je streeft naar perfectie. Je bent een goede planner en je hebt een sterke focus op details.
                            <hr>
                            <b>Je smaakprofiel</b>: Verfijnd, subtiel en gedetailleerd.
                            <hr>
                            <b>Ons magische voorstel:</b> De gastro-burger, mét pepersaus.
                            ";
                        } else if ($scores[0] > $scores[1] && $scores[2] == $scores[3]) {
                            echo "
                            <h2>Veelzijdig en charismatisch</h2>
                            Je bent een mengeling van energie en enthousiasme met helderheid en logica. Je bent sociaal vaardig en kunt goed met verschillende mensen omgaan. Je bent creatief en innovatief en je bent altijd op zoek naar nieuwe kansen.
                            <hr>
                            <b>Je smaakprofiel</b>: Gevarieerd, creatief en verrassend.
                            <hr>
                            <b>Ons magische voorstel:</b> De tapasplank, bestaande uit chickenwings, patatas bravas en een minihamburger!
                            ";
                        } else if ($scores[0] < $scores[1] && $scores[2] == $scores[3]) {
                            echo "
                            <h2>Diepgaand en reflectief</h2>
                            Je bent intelligent en nieuwsgierig en je houdt van diepgaande gedachten. Je bent onafhankelijk en je waardeert je eigen mening. Je bent creatief en vindingrijk en je bent altijd op zoek naar nieuwe inzichten. 
                            <hr>
                            <b>Je smaakprofiel</b>: Diepgaand, authentiek en puur.
                            <hr>
                            <b>Ons magische voorstel:</b> De vegetarische falafelburger. Laat je niet afschrikken, hij zit boordevol smaak!
                            ";
                        } else if ($scores[0] == $scores[1] && $scores[2] > $scores[3]) {
                            echo "
                            <h2>Enthousiast en empathisch</h2>
                            Je bent sociaal en praat graag met anderen, maar je geniet ook van tijd voor jezelf. Je bent gevoelig voor de gevoelens van anderen en je bent altijd bereid om te helpen. Je bent creatief en expressief en je bent altijd op zoek naar nieuwe manieren om je te uiten. 
                            <hr>
                            <b>Je smaakprofiel</b>: Sociaal, gezellig en uitnodigend.
                            <hr>
                            <b>Ons magische voorstel:</b> De klassieke barbecue-baconburger, met een eigentijdse twist!
                            ";
                        } else if ($scores[0] == $scores[1] && $scores[2] < $scores[3]) {
                            echo "
                            <h2>Pragmatisch en objectief</h2>
                            Je bent evenwichtig en je kunt goed omgaan met verschillende mensen en situaties. Je bent realistisch en nuchter en je neemt beslissingen op basis van logica en feiten. Je bent flexibel en aanpasbaar en je bent altijd op zoek naar de beste oplossing. 
                            <hr>
                            <b>Je smaakprofiel</b>: Praktisch, efficiënt en no-nonsense.
                            <hr>
                            <b>Ons magische voorstel:</b> De overheerlijke chickenwrap, mét een crispy touch!
                            ";
                        } else if ($scores[0] == $scores[1] && $scores[2] == $scores[3]) {
                            echo "
                            <h2>Uniek en inspirerend</h2>
                            Je bent een individu met een unieke set van eigenschappen en talenten. Je bent in staat om mensen te inspireren en te motiveren met je passie en enthousiasme. Je bent een waardevolle aanwinst voor elk team en je hebt het potentieel om grootse dingen te bereiken.                            <hr>
                            <b>Je smaakprofiel</b>: Openminded, nieuwsgierig en onbegrensd.
                            <hr>
                            <b>Ons magische voorstel:</b> De subway-inspired italian beef sandwich. Hmmmmmm....
                            ";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-5" id="rightside">
                <div class="d-flex">
                    <div>
                        <!-- <img src="assets/wizard.png" class="wizard" alt="wizard"> -->
                        <!-- conditions to display certain image -->
                        <?php
                        //conditions to display certain message
                        if ($scores[0] > $scores[1] && $scores[2] > $scores[3]) {
                            echo "<img src='assets/1_spicytaco.jpg' alt='Interactief en inspirerend' class='resultpicture'>";
                        } else if ($scores[0] > $scores[1] && $scores[2] < $scores[3]) {
                            echo "<img src='assets/2_fishburger.jpg' alt='Direct' class='resultpicture'>";
                        } else if ($scores[0] < $scores[1] && $scores[2] > $scores[3]) {
                            echo "<img src='assets/3_cheeselover.jpg' alt='Kiest voor stabiliteit' class='resultpicture'>";
                        } else if ($scores[0] < $scores[1] && $scores[2] < $scores[3]) {
                            echo "<img src='assets/4_gastronomic.jpg' alt='Conformeel' class='resultpicture'>";
                        } else if ($scores[0] > $scores[1] && $scores[2] == $scores[3]) {
                            echo "<img src='assets/5_charismatic.jpg' alt='Veelzijdig en charismatisch' class='resultpicture'>";
                        } else if ($scores[0] < $scores[1] && $scores[2] == $scores[3]) {
                            echo "<img src='assets/6_vegi.jpg' alt='Diepgaand en reflectief' class='resultpicture'>";
                        } else if ($scores[0] == $scores[1] && $scores[2] > $scores[3]) {
                            echo "<img src='assets/7_baconburger.jpg' alt='Enthousiast en empathisch' class='resultpicture'>";
                        } else if ($scores[0] == $scores[1] && $scores[2] < $scores[3]) {
                            echo "<img src='assets/8_chickenwrap.jpg' alt='Pragmatisch en objectief' class='resultpicture'>";
                        } else if ($scores[0] == $scores[1] && $scores[2] == $scores[3]) {
                            echo "<img src='assets/9_italianbeef.jpg' alt='Uniek en inspirerend' class='resultpicture'>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>