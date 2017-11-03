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
                <select name="choixTable">
                    <option value="0">Table de 0</option>
                    <option value="1">Table de 1</option>
                    <option value="2">Table de 2</option>
                    <option value="3">Table de 3</option>
                    <option value="4">Table de 4</option>
                    <option value="5">Table de 5</option>
                    <option value="6">Table de 6</option>
                    <option value="7">Table de 7</option>
                    <option value="8">Table de 8</option>
                    <option value="9">Table de 9</option>
                </select>
                <button type="submit" value="Valider" class="midbutton">></button>
            </form>

            <div class="multiposition">
                <?php
                    $number = ($_POST['choixTable']);

                    for ($multiplication = 0; $multiplication <10; $multiplication++)
                    {
                    echo $number." x ".$multiplication." = ".$number * $multiplication."<br />";
                    }
                ?>
            </div>
        </article>
        <div class="multiposition">
            <a href="index.php"> Accueil </a>
        </div>
    </section>
</body>

</html>