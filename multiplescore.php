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
    <section>
        <article>
        <div class="multiposition"><h2>Résultat :</h2></div>
            <?php 
            $points = 0;
            $totalPoints = 0;
            $answer = $_POST['answer'];
            $result = $_POST['result'];
            $question = $_POST['question'];
            $tours = 0;
            foreach ($_POST['answer'] as $answer ):
            ?>

            <?php
            $totalPoints++;
            ?>
            <div class="results">
                <h3>Question <?= $totalPoints ?></h3><br />
                <p>Rappel de la question : <?= $question[$tours] ?></p><br />
                <p>Votre réponse : <?= $answer ?></p><br />
                
                <?php if ($result[$tours] == $answer) :
                ?>
                <p>Bonne réponse !</p>
                <?php $points++ ?>
                <?php else : ?>
                <p>Mauvaise réponse ! La solution était <?= $result[$tours] ?>.</p>
                <?php endif ?>
                <?php $tours++; ?>
            </div>

            <?php endforeach ?>
            <div class="multiposition"><p>Vos points totaux : <?= $points ?> / <?= $totalPoints ?></p>
        </article></div>
        <div class="multiposition">
            <a href="index.php"> Accueil </a>
        </div>
    </section>
</body> 

</html>