<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
    echo "Environment: " . $environment;
    echo "<br>";
    echo "Activity: " . $activity;
    echo "<br>";
    echo "Stress: " . $stress;
    echo "<br>";
    echo "Social: " . $social;
    echo "<br>";
    echo "Decision: " . $decision;
    echo "<br>";
    echo "Hobby: " . $hobby;
    echo "<br>";
    echo "Reaction: " . $reaction;
    echo "<br>";
    echo "Preference: " . $preference;
    echo "<br>";

    //function to calculate score
    function calculateScore($environment, $activity, $stress, $social, $decision, $hobby, $reaction, $preference) {
        $countA = 0;
        $countB = 0;
        $countC = 0;
        $countD= 0;
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
    print_r($scores);
    echo "<br>";
    echo "Your score is: A=" . $scores[0] . ", B=" . $scores[1] . ", C=" . $scores[2] . ", D=" . $scores[3] . ".";
    ?>
    <br>
    <br>
    <h2>Your result</h2>
    <?php
    //conditions to display certain message
    if ($scores[0] > $scores[1] && $scores[2] > $scores[3]) {
        echo "Interactief en inspirerend.";
    } else if ($scores[0] > $scores[1] && $scores[2] < $scores[3]) {
        echo "Direct.";
    } else if ($scores[0] < $scores[1] && $scores[2] > $scores[3]) {
        echo "Kiest voor stabiliteit.";
    } else if ($scores[0] < $scores[1] && $scores[2] < $scores[3]) {
        echo "Conformeel.";
    } else if ($scores[0] > $scores[1] && $scores[2] == $scores[3]) {
        echo "Veelzijdig en charismatisch.";
    } else if ($scores[0] < $scores[1] && $scores[2] == $scores[3]) {
        echo "Diepgaand en reflectief.";
    } else if ($scores[0] == $scores[1] && $scores[2] > $scores[3]) {
        echo "Enthousiast en empathisch.";
    } else if ($scores[0] == $scores[1] && $scores[2] < $scores[3]) {
        echo "Pragmatisch en objectief.";
    } else if ($scores[0] == $scores[1] && $scores[2] == $scores[3]) {
        echo "Uniek en inspirerend.";
    }

    ?>

</body>
</html>