<?php
    $string = "Now I've heard there was a secret chordThat David played, and it pleased the LordBut you dont really care for music, do you?It goes like this, the fourth, the fifthThe minor falls, the major liftsThe baffled king composing Hallelujah";
    $length = strlen($string);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <div>
        <h1>Hallelujah</h1>
        <h2>Leonard Cohen</h2>
        <span>
            <?php
                echo $string;
            ?>
        </span>
        <br>
        <strong>Length:</strong>
        <span>
            <?php
                echo $length;
            ?>
        </span>
    </div>
</body>
</html>