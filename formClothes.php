<?php

require 'connec.php';
$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];
    if (isset($_POST) && !empty($_POST)) {
        $errors = [];
        if (empty(trim($_POST['prodTitle']))) {
            $errors['prodTitle'] = "The product title must be greater than 1 character !";
        }
        if (empty(trim($_POST['prodPrice'])) OR strlen(trim($_POST['prodPrice'])) > 6) {
            $errors['prodPrice'] = "The price must be between 1 and 6 character !";
        }
        if (empty(trim($_POST['prodDescr'])) OR strlen(trim($_POST['prodDescr'])) > 249) {
            $errors['prodDescr'] = "The price must be between 1 and 6 character !";
        }
        if (empty(trim($_POST['prodCharacSize']))) {
            $errors['prodCharacSize'] = "The size is required";
        }
        if (empty(trim($_POST['prodShortTitle']))) {
            $errors['prodShortTitle'] = "The short title is required";
        }
        if (strlen(trim($_POST['prodCharacReference'])) < 7 OR strlen(trim($_POST['prodCharacReference'])) > 7) {
            $errors['prodCharacReference'] = "The reference need 7 character !";
        }
        if (empty(trim($_POST['prodPicture'])) OR strlen(trim($_POST['prodPicture'])) > 255) {
            $errors['prodPicture'] = "Your url is not correct !";
        }


// "nettoyage du $_POST" (trim)
// verification des erreurs (not empty, longueurs, type...)
        if (empty($errors)) {

            $query = "INSERT INTO clothes (prodTitle, prodShortTitle, prodPrice, prodDescr, prodCharacSize, prodCharacColor, prodCharacReference, prodPicture) VALUES (:prodTitle, :prodShortTitle, :prodPrice, :prodDescr, :prodCharacSize, :prodCharacColor, :prodCharacReference, :prodPicture)";
            $statement = $pdo->prepare($query);
            $statement->bindValue(':prodShortTitle', $_POST['prodShortTitle'], PDO::PARAM_STR);
            $statement->bindValue(':prodTitle', $_POST['prodTitle'], PDO::PARAM_STR);
            $statement->bindValue(':prodPrice', $_POST['prodPrice']);
            $statement->bindValue(':prodDescr', $_POST['prodDescr'], PDO::PARAM_STR);
            $statement->bindValue(':prodCharacSize', $_POST['prodCharacSize'], PDO::PARAM_STR);
            $statement->bindValue(':prodCharacColor', $_POST['prodCharacColor'], PDO::PARAM_STR);
            $statement->bindValue(':prodCharacReference', $_POST['prodCharacReference'], PDO::PARAM_STR);
            $statement->bindValue(':prodPicture', $_POST['prodPicture'], PDO::PARAM_STR);
            $statement->execute();
            header('Location: clothes.php');
            exit();
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300i,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/stylefonts.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Wild Bazar</title>
</head>

<body>

<!--Navbar-->

<div class="container-fluid p-0">
    <?php
    //Titre pour le jumbo
    $titleJumbo = "Add new Clothes";
    //Sous-Titre pour le jumbo
    $subTitleJumbo = "";
    //Besoin d'un bouton Add neww ? mettre true
    $addNewProductButton = false;
    // Si bouton add new indiquer la page php contenant le formulaire d'ajout
    $namePageNewProductForm = "formClothes.php";
    include 'header.php';
    ?>
</div>



    <!-- Formulaire -->
<div class="container mt-5">
    <form action="formClothes.php" method="post" class="pb-2">
        <div class="form-group">
            <label class="col-sm col-form-label" for="prodTitle">Short Title :</label>
            <div class="col-sm">
                <input class="form-control" type="text" id="prodShortTitle" placeholder="My product" name="prodShortTitle" value="<?= $_POST['prodShortTitle'] ?? "" ?>" required>
                <small class="text-danger font-weight-bold"><?= $errors['prodShortTitle'] ?? "" ?></small>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm col-form-label" for="prodTitle">Title :</label>
            <div class="col-sm">
                <input class="form-control" type="text" id="prodTitle" placeholder="My product" name="prodTitle" value="<?= $_POST['prodTitle'] ?? "" ?>" required>
                <small class="text-danger font-weight-bold"><?= $errors['prodTitle'] ?? "" ?></small>
            </div>
        </div>

        <div class="form-group">
            <label for="prodPrice" class="col-sm col-form-label">Price :</label>
            <div class="col-sm">
                <input type="number" step="0.01" class="form-control" id="prodPrice" placeholder="99.99" name="prodPrice" maxlength="7" value="<?= $_POST['prodPrice'] ?? "" ?>" required>
                <small class="text-danger font-weight-bold"><?= $errors['prodPrice'] ?? "" ?></small>
            </div>
        </div>

        <div class="form-group">
            <label for="prodDescr" class="col-sm col-form-label">Description :</label>
            <div class="col-sm">
                <input type="text" class="form-control" id="prodDescription" placeholder="My product description" name="prodDescr" value="<?= $_POST['prodDescr'] ?? "" ?>" required>
                <small class="text-danger font-weight-bold"><?= $errors['prodDescr'] ?? "" ?></small>
            </div>
        </div>

        <div class="form-group">
            <label for="prodCharacSize" class="col-sm col-form-label">Size :</label>
            <div class="col-sm">
                <?php $sizes = ['XS', 'S', 'M', 'L', 'XL']; ?>
                <?php foreach ($sizes as $key=> $size) : ?>

                    <div class="custom-control custom-checkbox custom-control-inline py-3 pr-3">
                        <input type="checkbox" class="custom-control-input" id="prodCharacSize<?=$key ?>" name="prodCharacSize" value="<?= $size ?>">
                        <label class="custom-control-label" for="prodCharacSize<?=$key ?>"><?= $size ?></label>
                    </div>

                <?php endforeach; ?>
                <p><?= $errors['prodCharacSize'] ?? '' ?></p>
            </div>
        </div>

        <div class="form-group">
            <label for="prodCharacColor" class="col-sm col-form-label">Color :</label>
            <div class="col-sm">
                <select id="prodCharacColor" name="prodCharacColor">
                    <?php $color = ['White', 'Black', 'Grey', 'Blue', 'Red', 'Green', 'Orange', 'Yellow', 'Purple', 'Pink', 'Brown']; ?>
                    <option selected>Choose a color</option>
                    <?php foreach ($color as $colors) { ?>
                        <option value="<?= strtolower($colors); ?>">
                            <?= $colors; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="prodCharacReference" class="col-sm col-form-label">Reference :</label>
            <div class="col-sm">
                <input type="text" class="form-control" id="prodCharacReference" placeholder="A123456" name="prodCharacReference" maxlength="7" value="<?= $_POST['prodCharacReference'] ?? "" ?>" required>
                <small class="text-danger font-weight-bold"><?= $errors['prodCharacReference'] ?? "" ?></small>
            </div>

        </div>
        <div class="form-group">
            <label for="prodPicture" class="col-sm-2 col-form-label">Picture (url) :</label>
            <div class="col-sm">
                <input type="text" class="form-control" id="prodPicture" placeholder="https://image.com/picture.png" name="prodPicture" value="<?= $_POST['prodPicture'] ?? "" ?>" required>
                <small class="text-danger font-weight-bold"><?= $errors['prodPicture'] ?? "" ?></small>
            </div>
        </div>

        <div class="d-flex justify-content-center pb-3">
            <button type="submit" class="btn btn-secondary px-5">Create Product</button>
        </div>
    </form>
</div>



    <!-- DEFINITION DE FENETRE MODALE LEGAL MENTIONS-->
    <div class="modal fade" id="modalLegalMention" tabindex="-1" role="dialog" aria-labelledby="modalDescrProduct"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Legal Mentions</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-xs-6 col-md-4 art-img-content">
                            <img class="card-img" src="assets/img/logo/yoshi.png" alt="Card image"/>
                        </div>
                        <div class=" col-xs-6 col-md-8">
                            <div class="card-body wildbazar-titlemodal">
                                <h2>WILD BAZAR</h2>
                                <p class="card-text art-descr">Images and data on this site are subject to
                                    copyright.</p>
                                <p class="card-text art-descr">Some images used come from proprietary website and
                                    must be used after
                                    acceptance of the owner.</p>
                                <h3>© Yoshi Corporate - Wild Code Scool 2019</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer row  justify-content-end p-2 m-1 text-center">
                    <div class="col-sm-6 col-md-4 col-lg-3 p-2">
                        <button type="button" class="btn btn-danger  w-100" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php
    include 'footer.php';
    ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <!-- Script d'effet de texte de titre majeur -->
    <script src="assets/js/scroll.js"></script>

</body>

</html>