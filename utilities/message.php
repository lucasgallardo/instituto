<?php
session_start();

if (isset($_SESSION['message'])) {
    switch ($_SESSION['message']) {
        case 'file_not_exist':
            echo '<div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    El archivo fue borrado. Solicitar un código nuevo.
                </div>';
            unset($_SESSION['message']);
            break;
        case 'not_found':
            echo '<div class="alert alert-error">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Código inexistente. Ingrese un código correcto.
                </div>';
            unset($_SESSION['message']);
            break;
        case 'url':
            echo '<div class="people">
                <h3>'.$_SESSION['titulo'].'</h3>
                <p><a href="'.$_SESSION['url'].'" target="_blank">'.$_SESSION['url'].'</a></p>
            </div>';
            unset($_SESSION['message']);
        break;

        default:
            unset($_SESSION['message']);
            break;
    }
}
