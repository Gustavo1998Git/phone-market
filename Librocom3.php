<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="fonts/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="CSS/animacion.css">
    <link rel="stylesheet" href="CSS/estilocom.css">
    <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Fugaz+One|Luckiest+Guy|Vibes&display=swap" rel="stylesheet">

</head>

<body>


    <div class="header">
        <h1 class="logo">Phone-Market</h2>
            <input type="checkbox" id="chk">
            <label for="chk" class="show-menu-btn">
                      <i class="fas fa-ellipsis-h"></i>
                    </label>

            <ul class="menu">
                <a href="Principal.php"><span class="icon-home"></span> Inicio</a>
                <a href="celulares.php"><span class="icon-mobile"></span>Smartphones</a>
                <a href="tablets.php"><span class="icon-tablet"></span>Tablets</a>
                <a href="accesorios.php"><span class="icon-headphones"></span>Accesorios</a>
                <a href="galeria.php"><span class="icon-images"></span>Galeria</a>
                <a href="busquedas.php"><span class="icon-search"></span>Buscar</a>
                <a href="login.php"><span class="icon-user"></span>Ingresar</a>
                <label for="chk" class="hide-menu-btn">
                            <i class="fas fa-times"></i>
                          </label>
            </ul>
    </div>

    <section class="Comentarios">
        <h3>Opiniones Sobre el sitio: </h3>
        <hr>

    </section>

    <section id="comen1">
        <div class="comments-container">
            <h4>Comentarios</h4>
            <ul id="comments-list" class="comments-list">
                <li>
                    <div class="comment-main-level">
                        <div class="comment-avatar">
                            <img src="imagenes/boy.png"></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="#">GerardoVC</a></h6>
                                <span>hace 4 horas</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Muy buena pagina para poder comprar en linea, es facil de adquirir los productos.
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="comment-main-level">
                        <div class="comment-avatar">
                            <img src="imagenes/chica.png"></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="#">JudithGN</a></h6>
                                <span>hace 4 horas y 50 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Muy buena pagina para poder comprar en linea, es facil de adquirir los productos.
                            </div>

                        </div>
                    </div>
                </li>

                <li>
                    <div class="comment-main-level">
                        <div class="comment-avatar">
                            <img src="imagenes/boy.png"></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="#">ThiagoF</a></h6>
                                <span>hace 5 horas y 20 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Los productos que ofrecen son originales y un envio rapido </div>

                        </div>
                    </div>
                </li>

                <li>
                    <div class="comment-main-level">
                        <div class="comment-avatar">
                            <img src="imagenes/chica.png"></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="#">TeresaRT</a></h6>
                                <span>hace 6 horas y 25 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                Apenas compre unos audifonos y fueron compatibles con mi movil, excelente servicio </div>

                        </div>
                    </div>
                </li>

                <li>
                    <div class="comment-main-level">
                        <div class="comment-avatar">
                            <img src="imagenes/boy.png"></div>
                        <div class="comment-box">
                            <div class="comment-head">
                                <h6 class="comment-name by-author"><a href="#">JulianCG</a></h6>
                                <span>hace y horas y 40 minutos</span>
                                <i class="fa fa-reply"></i>
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="comment-content">
                                El celular que apenas compre, es de los mas recientes en el mercado, tienen los mejores equipos </div>

                        </div>
                    </div>
                </li>

            </ul>
        </div>


    </section>
    <section class="paginacion">
        <ul>
            <li><a href="Librocom.php">1</a></li>
            <li><a href="Librocom2.php">2</a></li>
            <li><a href="Librocom3.php" class="active">3</a></li>
        </ul>
    </section>
    <hr>

    <section id="caja">

        <form action="">
            <h2>Deja un Comentario</h2>
            <input type="text" name="Nombre" placeholder="Nombre">

            <input type="text" name="correo" placeholder="Correo">

            <textarea name="mensaje" placeholder="Escriba aquí su comentario">
</textarea>
            <input type="button" value="ENVIAR" id="boton">
        </form>

        <br/><br/><br/><br/><br/><br/>

    </section>


    <?php
    include("pie.php");
   ?>

</body>

</html>