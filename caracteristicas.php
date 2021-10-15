<?php require_once('templates/header.php'); ?>
<div class="container w-75 mt-3">
    <img class="w-100" src="./images/header.png" alt="encabezado">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="estructura.html">Estructura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clasificacion.hmtl">Clasificación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="caracteristicas.html">Características</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Equipo</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container" id="menu">
            <div>
                <ul class="navbar-nav">
                    <li><a href="caracteristicas/objetivos.html" class="btn btn-info mt-5">Objetivos</a></li>
                    <li><a href="caracteristicas/metas.html" class="btn btn-info mt-1">Metas</a></li>
                    <li><a href="caracteristicas/recursosMateriales.html" class="btn btn-info mt-1">Recursos
                            Materiales</a></li>
                    <li><a href="caracteristicas/recursoshumanos.html" class="btn btn-info mt-1">Recursos
                            Humanos</a></li>
                </ul>
            </div>
            <div>
                <img src="images/vacunacionn.jpeg" alt="" class="img-caracteristicas">
            </div>
        </div>


        <?php require_once('templates/footer.php'); ?>