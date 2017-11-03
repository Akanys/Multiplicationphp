<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication</title>
</head>

<body>
    <section class="wrap">
        <article>
                <?php
                $firstvalue = rand(0, 9);
                $secondvalue = $_POST['choiceTable'];
                $result = $firstvalue * $secondvalue;
                ?>
            <form action="answer.php" method="post">
                <input type="text" id="questioninput" name="answer" placeholder='<?php echo $firstvalue ."x". $secondvalue ."=";?>'>
                <input type="text" name="result" style="display:none;" value="<?php echo "$result" ?>">
                <button type="submit" value="Valider" class="questionbutton">></button>
            </form>
        </article>
        <div class="multiposition">
            <a href="index.php"> Accueil </a>
        </div>
    </section>
</body>

</html>