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
        <article >
            <div class="multiposition">
                <?php
                $answer = $_POST['answer'];
                $result = $_POST['result'];

                    if($answer == $result){
                        echo 'WP !';
                    }
                    else{
                        echo 'Nope !';
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