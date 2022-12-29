<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Galery</title>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="title">Image information</h1>
        </div>
    </header>
    <section>
        <div class="load">
            <a href="index.php" class="btn">Back to gallery</a>
        </div>
    </section>
    <section class="info-image">
        <div class="img">
            <img src="./<?php echo ($image['imagen']); ?>" alt="" width="400px">
        </div>
        <div class="image-details">
            <div class="img-title">
                <h2><?php echo ($image['title']); ?></h2>
            </div>
            <div class="img-description">
                <p><?php echo ($image['description']); ?></p>
            </div>
        </div>
    </section>
    <hr>
    <footer class="footer">
        <p class="author">Diseñado por Desarrollador Web<a href="https://github.com/lgramirezs" target="_blank" rel="noopener"> Luis Ramírez</a></p>
    </footer>
</body>

</html>