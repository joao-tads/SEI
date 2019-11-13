<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
</head>
<body class="bg-light">
<header class="container">
    <div class="d-flex my-3 p-3 bg-dark text-white rounded shadow-sm">
        <h6 class="mr-auto"><?=$titulo?></h6>
        <?php if(isset($_SESSION['usuario'])){?>
            <h6>
                <a href="\logout" class="text-decoration-none text-white">Sair</a>
            </h6>
        <?php }?>
    </div>
</header>
<main class="container">
