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
            <h1 class="title">Load image</h1>
        </div>
    </header>
    <section class="form-container">
        <form class="form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <?php if (!empty($errors)) :; ?>
                <div>
                    <ul>
                        <?php
                        foreach ($errors as $key => $error) {
                            echo $error . '<br>';
                        }; ?>
                    </ul>
                </div>
            <?php endif; ?>
            <div class="form-control">
                <label for="image">Select an image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-control">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo htmlspecialchars(!$successfully && isset($name) ? $name : ''); ?>">
            </div>
            <div class="form-control">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="40" rows="5"><?php echo htmlspecialchars(!$successfully && isset($description) ? $description : ''); ?></textarea>
            </div>
            <div>
                <input class="btn" type="submit" value="Send">
            </div>
        </form>
    </section>
    <hr>
    <footer class="footer">
        <p class="author">Diseñado por Desarrollador Web<a href="https://github.com/lgramirezs" target="_blank" rel="noopener"> Luis Ramírez</a></p>
    </footer>
</body>

</html>