<?php 
    $text = "sono una frase sporca, censurami.";
    $shutup = str_replace($_GET['word'], "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <h1>PHP Bad Words</h1>
    <div>
        <h2>Testo non censurato:</h2>
        <p><?php echo $text; ?></p>
        <span>Lunghezza del testo: <?php echo strlen($text);?></span>
    </div>
    <div>
        <h2>Testo censurato:</h2>
        <p><?php echo $shutup; ?></p>
        <span>Lunghezza testo censurato: <?php echo strlen($shutup);?></span>
    </div>
</body>
</html>