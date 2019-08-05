<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clientes</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/alertify.min.css"/>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.4/build/css/themes/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/styles.css">

</head>

<body class="fondo"> 

    <div class="container">

        <!-- Navbar principal-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="border-radius: 0px 0px 20px 20px;">
            <a class="navbar-brand" href="#"><i class="fas fa-user-cog"></i> Gestión de clientes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Home'); ?>" style="color: white;">CRUD&nbsp;<i class="fas fa-users" style="color: white;"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('index.php/Chart'); ?>" style="color: white;">Gráficas&nbsp;<i class="fas fa-chart-pie" style="color: white;"></i></a></li>
                </ul>
            </div>
        </nav>
        <!-- Navbar principal end-->
        
        <div class="title-box">
            <h1>Gestión de clientes</h1>
            <p class="lead">Prueba diseñada por Rafael Luckert para la vacante de desarrollador web<br> </p>

        </div>