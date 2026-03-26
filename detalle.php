<?php
    require_once './includes/nav.php';
    require_once './includes/head.php';
    require_once './includes/article.php';
    require_once './includes/footer.php';
    require_once './includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php head("Detalles"); ?>

<body>
    <!--Titol y menu de navegació-->
    <?php mostrarHeader("verde", "Detalles") ?>
    <hr> 
    <br>
    <main>
        <section class="gridCantoLoco">
            <h2>El Canto del Loco</h2>
            <img alt="Imagen grupo" src="./assets/img/El_canto_del_loco.jpg">
            <article>
                <h3>Información General</h3>
                <p><strong>Periodo de Actividad:</strong>1994-2010</p>
                <p><strong>Origen:</strong> Madrid, España</p>
                <p><strong>Género:</strong> Pop rock</p>
                <p>El Canto del Loco (Inglés: The Song of the Madman) fue un grupo musical español del Rock alternativo y Pop rock. Fue creado en 1994 por Dani Martín e Iván Ganchegui (quien dejó el grupo en 2002), y años después terminarían por ser 5 miembros originales. Influidos principalmente por otros grupos españoles de la década de 1980 y con 5 álbumes de estudio, El Canto del Loco ha conseguido vender más de un millón de copias en el mercado, convirtiéndose en uno de los grupos musicales más importantes del panorama español en su momento</p>
            </article>
            <div>
                <a href="#">Escuchar Música</a>
            </div>
        </section>
        <br>
        <section>
            <h2>Festivales</h2>
            <br>
            <article>
                <h3>Primavera Sound</h3>
                <br>
                <p>El festival aúna en sus carteles las últimas propuestas musicales del ámbito independiente junto a artistas de contrastada trayectoria, abarcando cualquier estilo o género, buscando la calidad y apostando esencialmente por el pop, el rock y las tendencias más underground de la música electrónica y de baile</p>
            </article>
            <br>
            <article>
                <h3>Debajo de mi Sombrero</h3>
                <br>
                <p>El Festival no es solo un gran show: es un encuentro irrepetible con los artistas que forman parte de nuestra memoria musical y emocional. Un festival perfecto para unas fechas especiales. Sobre el escenario, un cartel de lujo con algunas de las voces más icónicas del pop nacional.</p>
            </article>
        </section>
    </main>
    <br>
    <hr>
    <?php mostrarFooter() ?>
</body>

</html>