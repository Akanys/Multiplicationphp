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
            <form action="multiplescore.php" method="post">
                <?php
                    foreach ($_POST['multipleChoice'] as $value) :
                ?>
                <div>
                    <div class="multiposition">
                        <h2>Table de <?= $value ?></h2>
                    </div>
                    <div>
                        <?php
                        for ($test = 0; $test < 5; $test++) :
                        $randNumb = rand(0,9);
                        $result = $value * $randNumb;
                        ?>
                        <div class="multiposition">
                            <p class="mulplicationquestion">
                            <?= $value ?> x <?= $randNumb ?> = 
                            </p>
                            <input type="text" name="answer[]" class="inputmultiquestion" placeholder="?">
                            <input type="hidden" name="result[]" value="<?= $result ?>">
                            <input type="hidden" name="question[]" value="<?= $value ?> x <?= $randNumb ?>">
                        </div>
                        <?php endfor ?>
                    </div>
                    <?php endforeach ?>
                    <div class="multiposition">
                        <button type="submit" id="validmultiple">Valider</button>
                </div>
            </form>
        </article>
        <div class="multiposition">
            <a href="index.php"> Accueil </a>
        </div>
    </section>
</body> 
</html>