<?php
    require_once './includes/nav.php';
    require_once './includes/head.php';
    require_once './includes/article.php';
    require_once './includes/footer.php';
    require_once './includes/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<?php head("Formulari d'alta"); ?>

<body>
        <!--Titol y menu de navegació-->
    <header>
        <h2 class="titulo">
            <span id="verde">Formulari </span>
            <span id="naranja">d'alta</span>
        </h2>
        <?php mostrarNav() ?>
    </header>
    <hr>
    <br>
    <main>
        <form>
                <h4>Datos Personales</h4>
                <br>
                <label>Nombre:</label>
                <input type="text">

                <label>Correo electrónico:</label>
                <input type="email">

                <label>Contraseña:</label>
                <input type="password">
                
                <h4>Preferencias Musicales</h4>
                <br>
                <label>Género favorito:</label>
                <select>
                    <option>Selecciona un género</option>
                    <option>Rock</option>
                    <option>Pop</option>
                    <option>Jazz</option>
                    <option>Electrónica</option>
                </select>
                <label><input type="checkbox">Deseo recibir noticias y novedades</label>
            <br>
            <button type="submit">Registrarse</button>
        </form>
</main>
<br>
<hr>
<br>
<?php mostrarFooter() ?>
</body>
</html>