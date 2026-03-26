<?php
    require_once './includes/nav.php';
    require_once './includes/head.php';
    require_once './includes/article.php';
    require_once './includes/footer.php';
    require_once './includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php head("Festivales"); ?>
<body>
    <!--Titol y menu de navegació-->
    <?php mostrarHeader("naranja", "Festivales"); ?>
    <hr>
    <!--Engloba tota la pagina-->
    <main>
        <h2 class="titulo">
                <span id="verde">Festivales </span>
                <span id="naranja">de </span>
                <span id="verde">Música</span>
        </h2>
        <section class="gridFestivalesMusica">
            <article>
                <h3>Debajo de mi Sombrero</h3>
                <p>Palacio Vistalegre Madrid · 12 de Diciembre de 2025</p>
                <img alt="Imagen Cartel" src="assets/img/sombrero.jpg" height="200">
                <p>Sobre el escenario, un cartel de lujo con algunas de las voces más icónicas del pop nacional. Himnos generacionales, energía en estado puro. Una noche pensada para cantar, bailar, emocionarse y celebrar. Los artistas más grandes de la Edad de Oro del Pop Español juntos en un evento que promete recrear la banda sonora de tu vida.</p>
                <a href="https://www.palaciovistalegre.com/event/debajo-de-mi-sombrero-el-festival/">Ver más</a>
            </article>
            <article>
                <h3>Intro Music Festival</h3>
                <p>Valladolid · 29 de Noviembre de 2025</p>
                <img alt="Imagen Festival" src="assets/img/intromusic.jpg" height="200">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also </p>
                <a href="https://intromusicfest.com/">Ver más</a>
            </article>
            <article>
                <h3>Primavera Sound</h3>
                <p>Barcelona · 4-6 de Junio de 2026</p>
                <img alt="Imagen Primavera Sound" src="assets/img/primavera.png" height="200">
                <p>Ya tenemos cartel para la 23a edición del Primavera Sound, que se celebra del 4 al 6 de junio de 2026 en el Parc del Fòrum. En esta ocasión el programa está encabezado por The Cure, Doja Cat, The xx, Gorillaz, Massive Attack, Addison Rae y My Bloody Valentine. Pero, claro, hay mucho más. Entre los casi 150 artistas confirmados están Mac DeMarco, Pinkpantheress, Skrillex, Peggy Gou, Lola Young, Father John Misty, Ethel Cain, Bad Gyal, Big Thief, Wet Leg, Little Simz, Slowdive, Kneecap, Alex G, Dijon y Blood Orange, entre muchos otros. ¡Ahí estaremos!</p>
                <a href="https://www.timeout.es/barcelona/es/musica/primavera-sound-la-guia-completa">Ver más</a>
            </article>
        </section>
        <hr>
        <section>
            <h2 class="titulo">
                <span id="naranja">Artistas </span>
                <span id="verde">y </span>
                <span id="naranja">Grupos</span>
            </h2>
            <article>
                <h3>El Canto del Loco</h3>
                <p>Pop Rock</p>
                <a href="detalle.html">Más info</a>
            </article>
            <br>
            <article>
                <h3>The Beatles</h3>
                <p>Rock</p>
                <a href="detalle.html">Más info</a>
            </article>
        </section>
    </main>
    <br>
    <hr>
    <br>
    <?php mostrarFooter() ?>
</body>
</html>