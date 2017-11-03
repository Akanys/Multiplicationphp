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
            <form action="#" method="post">
                <div class="multicheckedl">
                    <input type="checkbox" class="check" name="valeurs[]" value="0">Table de 0<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="1">Table de 1<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="2">Table de 2<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="3">Table de 3<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="4">Table de 4<br />
                </div>
                <div class="multicheckedr">
                    <input type="checkbox" class="check" name="valeurs[]" value="5">Table de 5<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="6">Table de 6<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="7">Table de 7<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="8">Table de 8<br />
                    <input type="checkbox" class="check" name="valeurs[]" value="9">Table de 9<br />
                </div>
                <button type="submit" value="Valider" class="checkbutton">></button>
            </form>

            <div class="multiposition">
                <?php
                    foreach($_POST['valeurs'] as $valeur) : ?>
                    <div class="multimultiple">
                        <?php for ($multiplication = 0; $multiplication <10; $multiplication++)
                        {
                            echo $valeur."x".$multiplication."=".$valeur * $multiplication."<br />";
                        }
                        ?>
                    </div>
                    <?php endforeach ?>
                </div>
        </article>
        <div class="multiposition">
            <a href="index.php"> Accueil </a>
        </div>
    </section>

</body>

</html>