<?php
$paragraph = $_GET['paragraph'];
$paragraph_length = strlen($paragraph);
$censored = $_GET['word'];
$censored_in_P = str_replace($censored, "***", $paragraph); 
$word = $_GET['word'];
$p_censored_length = strlen($censored_in_P);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="container">
        <div> 
            <h4>Questo è il paragrafo:</h4>
            <p><?php echo "$paragraph"?></p>
        </div>
        <h5>
            Lunghezza del paragrafo: 
            <span class="numb"><?php echo $paragraph_length ?></span>
        </h5>
        <div>
            <h4>Questo è il paragrafo con la censura:</h4>
            <p><?php  echo "$censored_in_P" ?></p>
        </div>
        <h5>
            Lunghezza del paragrafo con la censura:
            <span class="numb"><?php echo "$p_censored_length" ?></span>
        </h5>
    </div>
</body>
</html>