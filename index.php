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
        <h1>Tables de multiplication</h1>
        <article>
            <form action="multiple.php" method="post">
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
        </article>

        <article>
            <form action="multiplecheck.php" method="post">
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
        </article>

        <article>
            <form action="question.php" method="post">
                <select name="choiceTable">
                    <option value="0">Test de 0</option>
                    <option value="1">Test de 1</option>
                    <option value="2">Test de 2</option>
                    <option value="3">Test de 3</option>
                    <option value="4">Test de 4</option>
                    <option value="5">Test de 5</option>
                    <option value="6">Test de 6</option>
                    <option value="7">Test de 7</option>
                    <option value="8">Test de 8</option>
                    <option value="9">Test de 9</option>
                </select>
                <button type="submit" value="Valider" class="midbutton">></button>
            </form>
        </article>

        <article>
            <form action="multiplechoice.php" method="post">
                <div class="multicheckedl">
                    <input type="checkbox" class="check" name="multipleChoice[]" value="0">Test de 0<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="1">Test de 1<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="2">Test de 2<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="3">Test de 3<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="4">Test de 4<br>
                </div>
                <div class="multicheckedr">
                    <input type="checkbox" class="check" name="multipleChoice[]" value="5">Test de 5<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="6">Test de 6<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="7">Test de 7<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="8">Test de 8<br>
                    <input type="checkbox" class="check" name="multipleChoice[]" value="9">Test de 9<br>
                </div>  
                <button type="submit" value="valid" class="checkbutton">></button>
            </form>
        </article>
    </section>
</body>

</html>