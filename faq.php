<?php
    $nav = [
        "Introduzione",
        "Norme sulla privacy",
        "Termini di servizio",
        "Tecnologie",
        "Domande Frequenti"
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <title>Google FAQ</title>
</head>
<body>
    <header>

        <section id="top">
            <img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c51f.png" alt="google logo">
            <span id="title">Privacy e termini</span>
        </section>

        <nav>
            <ul>
                <?php
                    foreach($nav as $elem) {
                ?>
                    <li><?php echo $elem ?></li>
                <?php
                    }
                ?>
            </ul>
        </nav>
        

    </header>
</body>
</html>