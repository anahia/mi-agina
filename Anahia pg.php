<html>

<head>
    <title>Anahia pag's</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: bisque;" data-spy="scroll">
    <div class="width 100%;">
        <div class="container-fluid">
            <nav id="menu1" class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
                <!-- enlaces a las secciones -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#primera">Curiosidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#segunda">Comida</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tercera">Formulario</a>
                    </li>
                </ul>
            </nav>
            <!--botones de tarjeta y formuario-->
            <br> <br> <br>
            <div class="container" id="primera">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo1">Datos de Mandalas</button>
                <button style="margin-right: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo2">comentarios</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo3">Datos de flores</button>
                <button style="margin-right: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo4">comentarios</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo5">Datos de juegos</button>
                <button style="margin-right: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo6">comentarios</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo7">Datos de Movies</button>
                <button style="margin-right: 10px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo8">comentarios</button>
                <!--casos especiales-->
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo9">Datos de Guitarras</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo10">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo11">Datos de Consolas</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo12">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo13">Datos de Series</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo14">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo15">Datos de Libros</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo16">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo17">Datos de Celulares</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo18">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo19">Datos de PC</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo20">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo21">Datos de Procesador</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo22">comentarios</button>
                <button style="margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo23">Datos Tienda O</button>
                <button style="margin-right: 10px; margin-top: 40px;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#dialogo24">comentarios</button>
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Curiosidades de Mandalas.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body con primera mandala -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="mandala.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Mandala.</h4>
                                                    <p class="card-text">Su nombre significa "círculo sagrado" en sánscrito. Aunque cabe resaltar que no todos los mándalas, están compuestos por circunferencias, sino que muchos tiene otras figuras. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--esta es la segunda mandala-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="mandala2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Mandala.</h4>
                                                    <p class="card-text">Sus difusores sostienen que hacer y pintar mándalas fomenta la activación del hemisferio izquierdo del cerebro, mejorando el estado de ánimo. Existen algunos estudios científicos y psicológicos que le
                                                        dan cierto crédito. </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el formulario1-->
                <div class="modal fade" id="dialogo2">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- comentarios -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las mandalas.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--segunda parte-->
            <div class="container2">
                <!--aqui van los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo3">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de flores.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body con primera rosa -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="la rosa.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">La Rosa.</h4>
                                                    <p class="card-text">-Las rosas pueden Vivir mucho tiempo. De hecho, un gran rosal que cubre la pared de la Catedral de Hildesheim en Alemania, se ha prolongado durante más de 1000 años. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--esta es la segunda rosa-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="roses.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Rosa.</h4>
                                                    <p class="card-text">Sólo 3 flores son mencionadas en la Biblia. El Alcanfor (alheña), el lirio y la rosa. Las rosas y los lirios se mencionan muchas veces. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios2-->
                <div class="modal fade" id="dialogo4">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las rosas.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--tercera parte-->
            <div class="container3">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo5">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de juegos.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body con primer juego -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="call-duty-mobile.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Call Of Duty</h4>
                                                    <p class="card-text">Es necesario que te unas a un clan, no solo para tener alguien con quien jugar y participar en otro tipo de partidas, sino porque también te otorgan una bonificación de experiencia adicional. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--este es el segundo juego-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="keanu.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">CiberPunk 2077.</h4>
                                                    <p class="card-text"> el videojuego del diseñador Mike Pondsmith no solo ofreció una fecha de lanzamiento, sino que también presentó al actor Keanu Reeves, como personaje del título -concretamente será Johnny Silverhand-
                                                        de boca del mismo Reeves. Muchos se han acordado de la película Johnny Mnemonic de 1995, en la que Reeves encarna a una especie de USB humano. Esta historia partió del mismísimo creador del ciberpunk,
                                                        William Gibson, quien publicó un relato homónimo en 1981 en la revista Omni (a la que luego seguiría Neuromante). </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios3-->
                <div class="modal fade" id="dialogo6">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre los juegos.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--cuarta parte-->
            <div class="container4">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo7">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de peliculas.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body con la primera pelicula -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="aves de presa2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Aves de Presa.</h4>
                                                    <p class="card-text">Después de separarse de Joker, Harley Quinn y otras tres heroínas, Canario Negro, Cazadora y Renée Montoya, unen sus fuerzas para salvar a una niña del malvado rey del crimen Máscara Negra.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--este es la segunda pelicula-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="Bloodshot_Cartel_Final.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Bloodshot.</h4>
                                                    <p class="card-text"> Murray Ray Garrison es resucitado por un equipo de científicos. Mejorado con nanotecnología, se convierte en una máquina de matar biotecnológica sobrehumana. Cuando Ray entrena por primera vez con otros
                                                        super soldados, no recuerda nada de su vida anterior. Pero cuando recuerda que lo mataron, sale de las instalaciones para vengarse, solo para descubrir que la conspiración va más allá de lo que pensaba.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios4-->
                <div class="modal fade" id="dialogo8">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las peliculas.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--quinta parte-->
            <div class="container5">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo9">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Guitarras.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body con la primera pelicula -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="materiales-guitarra.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Guitarra Acustica.</h4>
                                                    <p class="card-text">El tipo de madera empleada en su fabricación es otro de los factores claves en conseguir el resultado deseado, desde los primeros ejemplos conservados suele haber una clara preferencia por el uso de
                                                        pícea para la tapa y palo de rosa para la caja, siendo el mástil y el clavijero las partes en las que se presentan más variaciones a lo largo de la historia y donde en muchos casos se diferencia
                                                        un tipo de guitarra de otra.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--este es la segunda guitarra-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="electrica.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Guitarra Electrica.</h4>
                                                    <p class="card-text"> Tras la creación del amplificador (1935), Gibson puso a la venta la primera guitarra eléctrica en el año 1936: el modelo ES-150. En el año 1950, llegó la primera guitarra eléctrica producida en serie,
                                                        la Fender Broadcaster. El interés fue tan grande que cuatro más tarde fabricó otro modelo, la guitarra Stratocaster, una de las más vendidas. Tocar la guitarra eléctrica, como muchos otros instrumentos,
                                                        aporta numerosos beneficios mentales. El simple hecho de aprender el nombre de las cuerdas o los acordes hacen que el cerebro se ponga en acción. Así que si te apuntas a un curso de guitarra eléctrica
                                                        no solo conocerás las técnicas de este instrumento sino que mejorarás el rendimiento de tu cerebro.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios5-->
                <div class="modal fade" id="dialogo10">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las Guitarras.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--sexta parte-->
            <div class="container6">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo11">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Consolas.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body con PS4 -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="ps4.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">PlayStation.</h4>
                                                    <p class="card-text">Sony PlayStation se convirtió en la consola más exitosa de la quinta generación y la primera de la historia en conseguir vender más de 100 millones de unidades en todo el mundo. Realmente, este hecho
                                                        sorprende bastante, puesto que Sony se adentró en la industria cuando Sega y Nintendo eran las compañías más notables, y consiguió lo que las anteriores no pudieron lograr.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--XBOX-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="xbox-one-x.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">XBOX.</h4>
                                                    <p class="card-text"> Ejecutar los juegos antes de que se hayan instalado: puedes descargar un juego y antes de que el proceso haya finalizado, te aparecerá un mensaje de "¡listo para usar!". De esta manera, puedes iniciar
                                                        el juego con lo esencial y la descarga del resto de elementos seguirá en proceso. Expulsar discos con la consola apagada: a veces al acabar el juego y apagar la consola dejamos el disco adentro.
                                                        Ahora esto no es un problema, solo pulsa el botón lateral y el disco saldrá suavemente y la consola seguirá apagada.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios6-->
                <div class="modal fade" id="dialogo12">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las Consolas.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--septima parte-->
            <div class="container7">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo13">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Series.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body Greys Anatomy -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="GA.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Grey's Anatomy.</h4>
                                                    <p class="card-text">Es una serie de televisión estadounidense creada por Shonda Rhimes y protagonizada por Ellen Pompeo. Se estrenó el 27 de marzo de 2005 en la cadena ABC y narra el día a día de los cirujanos de un ficticio
                                                        hospital de Seattle, aunque la serie se rueda en Los Ángeles. La serie ha alcanzado un gran éxito comercial y elogios de la crítica. El primer episodio fue visto por 16.27 millones de espectadores
                                                        y el final de la primera temporada atrajo a 22.22 millones de espectadores. La segunda y tercera temporada recibieron los índices de audiencia más altos, con una audiencia media de 19 millones; alcanzando
                                                        el mayor número de audiencia con el episodio «It's the End of the World», de la segunda temporada, el cual fue visto por 38.1 millones de espectadores tan sólo en los Estados Unidos.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Lucifer-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="lucifer.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Lucifer.</h4>
                                                    <p class="card-text"> Lucifer es una serie de televisión estadounidense desarrollada por Tom Kapinos que se estrenó en Fox el 25 de enero de 2016. Se basa en el personaje de DC Comics creado por Neil Gaiman, Sam Kieth y Mike
                                                        Dringenberg, tomado de la serie de cómics The Sandman, quien más tarde se convirtió en el protagonista de una serie de cómics spin-off, ambos publicados por DC Comics. La serie es producida por Jerry
                                                        Bruckheimer Television, DC Entertainment y Warner Bros. Television. La serie gira en torno a Lucifer Morningstar (Tom Ellis), el diablo, que abandona el infierno por Los Ángeles, donde dirige su
                                                        propio club nocturno y se convierte en asesor del Departamento de Policía de Los Ángeles. El conjunto y el reparto incluyen a Lauren German como la Detective Chloe Decker, Kevin Alejandro como Detective
                                                        Daniel "Dan" Espinoza, D. B. Woodside como Amenadiel, Lesley-Ann Brandt como Mazikeen y Rachael Harris como la Dra. Linda Martin. El rodaje tuvo lugar principalmente en Vancouver, Columbia Británica,
                                                        antes de que la producción se trasladara por completo a Los Ángeles, California, a partir de la tercera temporada.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios7-->
                <div class="modal fade" id="dialogo14">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las Series.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--octava parte-->
            <div class="container8">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo15">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Libros.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body alquimista -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="el-alquimista.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">El Alquimista.</h4>
                                                    <p class="card-text">Considerado ya un clásico de nuestros días, El Alquimista relata las aventuras de Santiago, un joven pastor andaluz que un día emprende un viaje por las arenas del desierto en busca de un tesoro. Lo
                                                        que empieza como la búsqueda de bienes mundanos se convertirá en el descubrimiento del tesoro interior. Evocativa y profundamente humana, esta historia es el testimonio eterno del poder transformador
                                                        de nuestros sueños, de la importancia de escuchar a nuestros corazones y de descifrar el lenguaje que está más allá de las palabras. Y es que cuando una persona desea realmente algo, el Universo
                                                        entero conspira para que pueda realizar su sueño. Autor: Paulo Coelho</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--violet and finch-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="VaF.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Violet And Finch.</h4>
                                                    <p class="card-text"> Violet está rota. Finch está roto. ¿Pueden dos mitades rotas reconstruirse? Esta es la historia de una chica que aprende a vivir de un chico que pretende morir; de dos jóvenes que se encuentran y dejan
                                                        de contar los días para empezar a vivirlos.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios8-->
                <div class="modal fade" id="dialogo16">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre los Libros.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--novena parte-->
            <div class="container9">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo17">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Celulares.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body samsung -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="samsung.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Samsung.</h4>
                                                    <p class="card-text">Samsung comenzó como una pequeña empresa dedicada a la importación y exportación de alimentos. A diferencia de las clásicas start-up tecnológicas que empiezan en un garaje con medios limitados, Samsung
                                                        fue fundada por Lee Byung-chull con el dinero que su familia (una acaudalada saga de terratenientes de Corea del Sur) aportó, una cantidad inicial que hoy equivaldría a unos 5 millones de dólares.
                                                        Antes de iniciar su división electrónica en 1969, Samsung aglutinó en su conglomerado empresas de construcción, fabricación de textiles y hasta refinerías de azúcar. Samsung no “despegó” en la electrónica
                                                        hasta la década de 1970, cuando llegó a vender más de 10 millones de televisores solo en Corea del Sur. Su dueño es Lee Byung-chul. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--iphone-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="xs mas.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Iphone.</h4>
                                                    <p class="card-text"> Es una línea de teléfonos inteligentes de alta gama diseñada y comercializada por Apple Inc. Ejecuta el sistema operativo móvil iOS, conocido hasta mediados de 2010 como "iPhone OS". El iPhone dispone
                                                        de una cámara de fotos de 12 megapíxeles y un reproductor de música (equivalente al del iPod), además de software para enviar y recibir mensajes de texto y de voz. También ofrece servicios de Internet,
                                                        como leer correo electrónico, cargar páginas web y conectividad por Wi-Fi. La primera generación de teléfonos eran GSM cuatribanda con la tecnología EDGE; la segunda generación incluía UMTS con HSDPA.;
                                                        la sexta generación ya incluía 4G LTE.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios9-->
                <div class="modal fade" id="dialogo18">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre los Celulares.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--decima parte-->
            <div class="container10">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo19">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de PC.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body Dell -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="dell.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">DELL.</h4>
                                                    <p class="card-text">Es una compañía multinacional estadounidense establecida en Round Rock (Texas), la cual desarrolla, fabrica, vende y da soporte a computadoras personales, servidores, switches de red, programas informáticos,
                                                        periféricos y otros productos relacionados con la tecnología. El 7 de septiembre de 2016 Dell completa la adquisición de EMC para crear Dell Technologies, la fusión entre Dell(fabrica y vende computadoras
                                                        y servidores) y EMC (principalmente data center) dio origen a la mayor compañía tecnológica del mundo de capital privado, con un negocio de US$ 74.000 millones, unas 20 mil patentes a nivel global
                                                        y US$ 80.000 millones en ingresos. En todo el mundo tiene 140 mil empleados.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hp-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="hp.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">HP.</h4>
                                                    <p class="card-text"> HP fue fundado por Bill Hewlett y Dave Packard en 1939. Su primer producto fue un oscilador de audio y uno de sus primeros clientes, Walt Disney. Disney utilizó el oscilador para probar equipos de audio
                                                        en los 12 teatros especialmente equipados que mostraban Fantasia en 1940. HP ingresó al mercado de computadoras con la HP 2116A en 1966. Fue diseñada para controlar la gran línea de productos de
                                                        HP de equipos de prueba y medición. En 1969, HP comercializaba un sistema informático de tiempo compartido y continuó emitiendo nuevos productos, incluida su calculadora portátil HP-35 y varias computadoras
                                                        en la década de 1970.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios10-->
                <div class="modal fade" id="dialogo20">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las PC.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--decima-primera parte-->
            <div class="container11">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo21">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Procesador.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body ryzen -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="ryzen.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ryzen.</h4>
                                                    <p class="card-text">Es una línea de microprocesadores de la empresa AMD. La marca se introdujo en el año 2017 con productos que incorporan la microarquitectura Zen. Los primeros productos de la línea fueron anunciados oficialmente
                                                        durante la conferencia New Horizon celebrada por AMD el 13 de diciembre de 2016</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Intel-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="intel.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Intel.</h4>
                                                    <p class="card-text"> Es el mayor fabricante de circuitos integrados del mundo4​ según su cifra de negocio anual.5​ La compañía estadounidense es la creadora de la serie de procesadores x86, los procesadores más comúnmente
                                                        encontrados en la mayoría de las computadoras personales. Intel fue fundada el 18 de julio de 1968 como Integrated Electronics Corporation (aunque un error común es el de que "Intel" viene de la
                                                        palabra intelligence) por los pioneros en semiconductores Robert Noyce y Gordon Moore, y muchas veces asociados con la dirección ejecutiva y la visión de Andrew Grove.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios11-->
                <div class="modal fade" id="dialogo22">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre los Procesadores.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--decima-segunda parte-->
            <div class="container12">
                <!--aqui estaban los botones-->
                <!--esto designa la posicion de los cuadros-->
                <div class="modal fade" id="dialogo23">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head-->
                            <div class="modal-header">
                                <h4 class="modal-title">Datos curiosos de Tiendas Online.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body amazon -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="amazon.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Amazon.</h4>
                                                    <p class="card-text">Es una compañía estadounidense de comercio electrónico y servicios de computación en la nube a todos los niveles con sede en la ciudad estadounidense de Seattle, Estado de Washington. Su lema es: From
                                                        A to Z (traducido al español: «De la A a la Z»). Fue una de las primeras grandes compañías en vender bienes a través de Internet. Amazon también posee Alexa Internet, a9.com, Shopbop, Internet Movie
                                                        Database (IMDb), Zappos.com, DPreview.com y Twitch​ en Irlanda, Canadá, Australia, Alemania, Austria, Francia, China, Japón, Italia, España, Países Bajos, Brasil, India y México para poder ofrecer
                                                        los productos de esos países. También Amazon está presente en otros países desde donde realiza funciones de soporte, como en Costa Rica, desde donde centraliza la atención al cliente de Latinoamérica
                                                        y con 7500 empleados es una de las mayores empresas del país. En la actualidad está totalmente diversificada y catalogada en diferentes líneas de productos, ofreciendo DVD, CD de música, software,
                                                        videojuegos, electrónica, ropa, muebles, comida, libros, etc. Es la marca de venta al por menor más valiosa del mundo según el índice BrandZ</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Intel-->
                                        <div class="col">
                                            <div class="card">
                                                <img class="card-img-top" src="ebay.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Ebay.</h4>
                                                    <p class="card-text">Es un sitio destinado a la subasta y comercio electrónico de productos a través de Internet. Es uno de los pioneros en este tipo de transacciones, habiendo sido fundado en el año 1995. Desde 2002 y hasta
                                                        2015, eBay era propietario de PayPal. Desde julio de 2015 el Director Ejecutivo (CEO) de eBay es Devin Wenig.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--este es el comentarios12-->
                <div class="modal fade" id="dialogo24">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Head -->
                            <div class="modal-header">
                                <h4 class="modal-title">Danos tu opinion.</h4>
                                <button type="button" class="close" data-dismiss="modal">X</button>
                            </div>
                            <!-- Body -->
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <form>
                                        <!--Esto es un formulario-->
                                        <div class="form-group">
                                            <label for="comentarios">Dejanos saber tu comentarios sobre las Tiendas Online.</label>
                                            <textarea class="form-control" rows="4" id="comentarios" name="comentarios"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default">Enviar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Parte media-->
            <div id="segunda" style="min-height:100vh; padding-top:70px">
                <center>
                    <h1 style="font-size: 65px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Comida</h1>
                </center>
                <h4>Comida Italiana</h4>
                <p><strong>Lasaña</strong></p>
                <p>Aunque la preparación de la lasaña varía según la región en la que se prepare consiste en un tipo de pasta con forma de lámina cuadrada que se coloca en forma de bloque y se rellena con carne, pescado o verdura. Entre lámina y lámina también
                    lleva bechamel, y para terminar abundante queso con el que se le dará su aspecto habitual gratinado. Si todavía no te has atrevido tú mismo/a con un plato de esos que no tienen desperdicio empieza por nuestra lasaña de carne casera
                    con la que estamos seguros disfrutarás muchísimo.</p>
                <br>
                <p><strong>Risotto</strong></p>
                <p>Esta comida típica italiana se prepara a base de arroz y de queso parmesano, sin embargo, hoy en día existen muchas recetas de risotto con distintos ingredientes. Originario de la zona noroeste de Italia y debido a la abundancia de arroz
                    este plato ya es famoso en prácticamente todo el mundo. Nuestra recomendación, un risotto con bonito… con esta receta podrás apreciar la cremosidad típica del risotto italiano.</p>
                <br>
                <p><strong>Ensalada Capresse</strong></p>
                <p>Como en Italia no todo es pasta prueba esta ensalada capresse con ingredientes tan básicos como tomate, mozzarella fresca, unas hojas de albahaca y un chorrito de aceite de oliva. Por muy sencilla que parezca, la combinación de estos ingredientes
                    nos da como resultado una ensalada que destaca por su sabor a fresco y sus colores que justamente nos recuerdan la bandera de Italia.</p>
                <br>
                <h4>Comida Dominicana</h4>
                <p><strong>Sancocho</strong></p>
                <p> La palabra sancocho (nunca "salcocho", por favor) usada para referirse a un caldo cargado de carnes, vegetales y víveres no solo es dominicana. Varios países de Latinoamérica tienen sus versiones del sancocho. El sancocho dominicano de
                    lujo es el de siete carnes en el que 7 tipos de carnes de 4 animales se mezclan con auyama, raíces y verduras para crear un caldo rico como no has probado antes. La versión simplificada puede contener solo res, y quizá pollo.</p>
                <br>
                <p><strong>Mangú</strong></p>
                <p>El mangú es un plato tradicional, originario y típico de algunos países caribeños como la República Dominicana y Puerto Rico. En Costa Rica se le llama angú.1​ El mangú es básicamente un puré de plátanos verdes (o maduros en su versión
                    de mangú dulce), y se elabora salcochando plátanos y posteriormente machacándolos hasta lograr un puré.</p>
                <br>
                <p><strong>Pastel en Hoja.</strong></p>
                <p>Pasteles en Hoja es un plato similar al tamal, y popular en la República Dominicana y Puerto Rico. En lugar de una “masa” de maíz como en el tamal, en los pasteles se utiliza una base de plátano (o guineos verdes) y diferentes tubérculos.
                    Se pueden rellenar con carne de res (el relleno más común), pollo o lo que sea que te guste.</p>
            </div>
            <!-- Parte final -->
            <div id="tercera" style="min-height:100vh; padding-top:70px">
                <h1>Ingresa tus datos</h1>
                <form action="mi pag.php" method="POST">
                    <!--este el formulario-->
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="camponombre" name="camponombre">
                        <label for="nombre">Apellido:</label>
                        <input type="text" class="form-control" id="campoapellido" name="campoapellido">
                        <label for="nombre">Direccion:</label>
                        <input type="text" class="form-control" id="campodireccion" name="campodireccion">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="campomail" name="campomail">
                    </div>
                    <button type="submit" class="btn btn-default">Enviar</button>
                </form>
                <footer style="border-top:5px;">Gracias Por visitarnos.</footer>
            </div>
            <!--Esto es JS-->
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
    </div>
</body>

</html>