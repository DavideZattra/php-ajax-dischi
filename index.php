<?php

    require __DIR__  . '/db/database.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>

    <header>
        <img src="assets/spotify-logo.png" alt="spotify logo">
    </header>

    <main>
        <?php foreach ($album_list as $album ) { ?>
            
            <div class="contenitore-dischi">
                <div class="album-image">
                    <img src="<?php echo $album["poster"]; ?>" alt="<?php echo $album["title"]; ?> cover">
                </div>
                <h5><?php echo $album["title"]?></h5>
                <p><?php echo $album["author"] ?></p>
                <p><?php echo $album["year"] ?></p>
            </div>
        <?php  } ?>
    </main>

</body>
</html>