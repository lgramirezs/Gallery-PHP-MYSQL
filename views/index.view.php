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
            <h1 class="title">Galery PHP MYSQL</h1>
        </div>
    </header>
    <section>
        <div class="load">
            <a href="insert.php" class="btn">Load image</a>
        </div>
    </section>
    <section class="galery">
        <div class="galery-container">
            <?php if (!empty($images)) :; ?>
                <?php
                foreach ($images as $key => $image) {
                    $id = $image['id'];
                    $src = $image['imagen'];
                    echo "<img id='$id' class='galery-img' src='./$src'>";
                }; ?>
            <?php endif; ?>
        </div>
        <div class="box-gallery">
            <span id="close">X</span>
        </div>
        <div class="pagination">
            <?php if ($page !== 1) :; ?>
                <a class="btn" href="?page=<?php echo $page - 1; ?>">Prev</a>
            <?php endif; ?>
            <?php if ($page !== $pages) :; ?>
                <a class="btn" href="?page=<?php echo $page + 1; ?>">Next</a>
            <?php endif; ?>
        </div>
    </section>
    <hr>
    <footer class="footer">
        <p class="author">Diseñado por Desarrollador Web<a href="https://github.com/lgramirezs" target="_blank" rel="noopener"> Luis Ramírez</a></p>
    </footer>
    <script src="./js/main.js"></script>
</body>

</html>