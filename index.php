<?php

include_once("game.php");
$message = chooseWinner($randomElement);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="content_game">
        <form action="./game.php" method="POST">
            <h1>¿Qué eliges?</h1>
            <div class="options_game">
                <input type="submit" name="opcion" value="piedra">
                <input type="submit" name="opcion" value="papel">
                <input type="submit" name="opcion" value="tijera">
            </div>

            <input type="submit" class="reset_btn" name="reset" value="Volver a jugar">

        </form>

        <div class="content_message">
            <?php echo $message ?>
        </div>

    </div>
</body>

</html>