<?php

 function mostrarArticle1($titol, $descripcio, $src, $href){
    echo "
            <article>
                <h3>$titol</h3>
                <p>$descripcio</p>
                <img alt='Imagen' src='$src' height='140'>
                <br>
                <a href='$href'>Detalles</a>
            </article>
    ";
 }

 function mostrarArticle2($titol, $src, $text){
    echo "
        <article>
            <img>
            <h3>$titol</h3>
            <img alt='Imagen' src='$src' height='140'>
            <p>$text</p>
        </article>
    ";
 }

 function mostrarArticle3($titol, $text, $src, $text2){
    echo "
        <article>
            <h3>$titol</h3>
            <p>$text</p>
            <img alt='Imagen' src='$src' height='200px'>
            <p>$text2</p>
        </article>
    ";
 }