<?php
    require_once './includes/nav.php';

    function mostrarHeader($estil, $text){
        echo "
            <header>
                <h2 class='titulo'>
                    <span id='$estil'>$text</span>
                </h2>
        ";
        mostrarNav();
        echo "
            </header>
        ";
    }