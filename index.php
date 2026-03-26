<?php
    require_once './includes/nav.php';
    require_once './includes/head.php';
    require_once './includes/article.php';
    require_once './includes/footer.php';
    require_once './includes/header.php';
?>

<!DOCTYPE html>
<html lang="es">

<?php head("Portal de Música (P5_Xavi)"); ?>

<body>
    <!--Titol y menu de navegació-->
    <header>
        <h1 class="titulo">
            <span id="naranja">Mi </span> 
            <span id="verde">Portal </span>
            <span id="naranja">de </span> 
            <span id="verde">Música</span> 
        </h1>
        <?php mostrarNav(); ?>
    </header>
    <hr>
    <!--Apartat, que engloba tot el contingut menys els asides i el footer-->
    <main>
        <section class="gridFestivalProtagonista">
            <article class="festivalProtagonista">
                <h3>
                    <span id="verde">Primavera</span>
                    <span id="naranja">Sound</span>
                </h3>
                <p>2026 · Barcelona</p>
                <p>using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
                    'Content here, content here', making it look like readable English. Many desktop publishing packages
                    an</p>
            </article>
            <img class="imagenProtagonista" src="./assets/img/festival.jpg" height="160">
        </section>
        <hr>
        <h2 class="titulo">
            <span id="naranja">Lanzamientos </span>
            <span id="verde">Recientes</span>
        </h2>
        <section class="gridLanzamientosRecientes">
            <?php 
                mostrarArticle1("A very Jonas Christmas movie", "Jonas Brothers · BSO - Navideño", "./assets/img/jonas-brothers.jpg", "https://www.lahiguera.net/musicalia/artistas/jonas_brothers/disco/14697/");
                mostrarArticle1("KM0", "Pablo Alborán · Pop", "./assets/img/pablo.jpg", "https://www.lahiguera.net/musicalia/artistas/pablo_alboran/disco/14534/");
                mostrarArticle1("Lux", "Rosalía · Urbana", "./assets/img/ROSALIA.jpg", "https://www.lahiguera.net/musicalia/artistas/rosalia/disco/14657/");
                mostrarArticle1("Drapaires poligoneros", "Manolo García · Pop-Rock", "./assets/img/MANOLO.jpg", "https://www.lahiguera.net/musicalia/artistas/manolo_garcia/disco/14494/");
                mostrarArticle1("El camino", "Álvaro Soler · Pop", "./assets/img/alcaro.jpg", "https://www.lahiguera.net/musicalia/artistas/alvaro_soler/disco/14411/");
                mostrarArticle1("Vie", "Doja Cat · Hip-hop - Rap - Pop", "./assets/img/doja.jpg", "https://www.lahiguera.net/musicalia/artistas/doja_cat/disco/14404/");
                mostrarArticle1("Am I the drama?", "Cardi B · Hip-hop - Rap", "./assets/img/card.jpg", "https://www.lahiguera.net/musicalia/artistas/cardi_b/disco/10171/");
                mostrarArticle1("Breach", "Twenty One Pilots · Pop-Rock", "./assets/img/twenty.jpg", "https://www.lahiguera.net/musicalia/artistas/twenty_one_pilots/disco/14304/");
                mostrarArticle1("I can't give everything away (2002 - 2016)", "David Bowie · Pop-Rock", "./assets/img/david.jpg", "https://www.lahiguera.net/musicalia/artistas/david_bowie/disco/14557/");
                mostrarArticle1("Play", "Ed Sheeran · Pop", "./assets/img/ed.jpg", "https://www.lahiguera.net/musicalia/artistas/ed_sheeran/disco/14132/");
            ?>
        </section>
        <hr>
        <h2 class="titulo">
            <span id="verde">Artistas </span>
            <span id="naranja">Destacados</span>
        </h2>
        <section class="gridArtistasDestacados">
            <?php 
                mostrarArticle2("Bruno Mars", "./assets/img/bruno.jpg", "Pop i rock · ⭐⭐⭐⭐");
                mostrarArticle2("The Weeknd", "./assets/img/week.webp", "Electrònica · ⭐⭐⭐");
                mostrarArticle2("Coldplay", "./assets/img/coldplay.jpg", "Rock y pop · ⭐⭐⭐⭐");
                mostrarArticle2("Justin Bieber", "./assets/img/Justin_Bieber_in_2015.jpg", "Pop · ⭐⭐⭐⭐");
                mostrarArticle2("Eminem", "./assets/img/eminem.webp", "Pop · ⭐⭐⭐⭐");
                mostrarArticle2("Ed Sheeran", "./assets/img/Ed_Sheeran-6886_(cropped).jpg", "Soft rock · ⭐⭐⭐⭐");
                mostrarArticle2("Shakira", "./assets/img/shakira.jpg", "Pop · ⭐⭐⭐");
                mostrarArticle2("Adele", "./assets/img/Adele_2016.jpg", "Pop · ⭐⭐⭐⭐");
            ?>
        </section>
        <hr>
        <h2 class="titulo">
            <span id="naranja">Festivales </span>
            <span id="verde">Destacados</span>
        </h2>
        <section class="gridFestivalesDestacados">
            <?php mostrarArticle3("Festival de Jazz de Ciutat Vella", "Ciutat Vella · 15 d'Octubre", "./assets/img/jaz.png", "Lorem Ipsum is simply dummy text of thd scrambled it to make a type specimen book. It has survived
                    not only five centuries, but also the leap into electronic typesetting, remaining essentially
                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                    Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
                    versions of Lorem Ipsum.");
                mostrarArticle3("Festival Mira 2025", "Fira Montjuïc · 7-8 de Novembre", "./assets/img/mira.jpg", "Lorem Ipsum is simply dummy text of thd scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.");
                mostrarArticle3("Primavera Sound Barcelona 2026", "Parc del Fòrum · 4-6 de Juny 2026", "./assets/img/cartel-primavera-sound-2026-730x480-1.jpg", "El Primavera Sound 2026 se celebrará del 4 al 6 de junio en el Parc del Fòrum con cabezas de cartel
                    como The Cure, Doja Cat, The xx, Gorillaz, Massive Attack, Addison Rae y My Bloody Valentine, entre
                    los 150 artistas anunciados. En realidad, el festival se alargará durante toda la semana, pero aún
                    faltan por anunciar los conciertos de la jornada inaugural, la fiesta electrónica y la programación
                    paralela.");
            ?>
        </section>
        <hr>
        <h2 class="titulo">
            <span id="verde">Albums </span>
            <span id="naranja">més </span>
            <span id="verde">escoltats </span>
            <span id="naranja">en </span>
            <span id="verde">Spotify </span>
            <span id="naranja">(Top 10)</span>
        </h2>
        <section class="albumsEscoltats">
            <ol>
                <li>Bad Bunny - Un Verano Sin Ti</li>
                <li>The Weeknd - Starboy</li>
                <li>Ed Sheeran - Divide</li>
                <li>Olivia Rodrigo - SOUR</li>
                <li>Post Malone - Hollywood's Bleeding</li>
                <li>The Weeknd - After Hours</li>
                <li>Dua Lipa - Future Nostalgia</li>
                <li>Dua Lipa - Dua Lipa</li>
                <li>Post Malone - beerbongs & bentleys</li>
                <li>Taylor Swift - Lover</li>
            </ol>
        </section>

    </main>
    <hr>
    <!--Anuncis publicitaris-->
    <aside>
        <article>
            <h3>Caldo natural ANETO 50% GRATIS </h3>
            <img src="./assets/img/promogallo.jpg" height="200">
            <a href="https://www.caldoaneto.com/es">Ver más</a>
        </article>
    </aside>
    <aside>
        <article>
            <h3>Prova 1 mes de Premium Individual per 0€</h3>
            <img src="./assets/img/1_spotify_music.jpg" height="350">
            <br>
            <a href="https://www.spotify.com/es-ca/premium/">Ver más</a>
        </article>
    </aside>
    <hr>
    <br>
    <!--Peu de pagina-->
    <?php mostrarFooter() ?>
</body>
</html>