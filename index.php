<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class="container mt-3">
        <h1>Listes Des Produits</h1>
        <div class="row">
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="col-3">
                    <dvi class="card">
                        <img src="https://fastly.picsum.photos/id/36/200/200.jpg?hmac=VnDu-KXiZmaBJk0XmixLx-JdUPLqVQtLdiqMXOn4LZc" class="img-fluid" alt="La photo du produit">
                        <div class="card-body">
                            <h1 class="card-title">Asus I7 1To</h1>
                            <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, architecto.</p>
                            <a href="" class="btn btn-success btn-sm">Detail</a>
                            <a href="" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i> Ajouter</a>
                        </div>
                    </dvi>
                </div>
            <?php } ?>
        </div>
        <?php
        include("footer.php");
        ?>
    </div>
</body>

</html>