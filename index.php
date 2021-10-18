<?php
    session_start();
    if (!isset($_SESSION['idioma'])) {
        $idioma = array();
        $_SESSION['idioma'] = $idioma;    
    } else {
        switch ($_SESSION['idioma']) {
        case 'BG':
            $newURL = "bg";
            header('Location: '.$newURL);
        break;
        case 'ES':
            $newURL = "es";
            header('Location: '.$newURL);
        break; 
        case 'change':
            $_SESSION['idioma'] = array();
            unset($_SESSION['idioma']);
        break; 
        default:
            $_SESSION['idioma'] = array();
            unset($_SESSION['idioma']);                
        } 
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Лотария // Lotería</title>
    </head>
    <body>
        <div class='content'>
            <h1>Лотария // Lotería</h1>
            <img class='center' src="img/National-lottery.jpg" alt="logo">
            <div>
                <div>
                    <form action='index.php' method='post'>
                        <table class='language'>
                            <tr><td><h2>Select your language:</h2></td></tr>
                            <tr>
                                <td><button type="submit" name='idioma' value='BG'>Бългърски</button></td>
                                <td><button type="submit" name='idioma' value='ES'>Español</button></td>
                            </tr>
                        </table> 
                    </form>
                </div>
            </div>
            <?php 
                if (isset($_REQUEST['idioma'])) {
                    $idioma = $_REQUEST['idioma'];
                    $_SESSION['idioma'] = $idioma;
                    switch ($_SESSION['idioma']) {
                        case 'BG':
                            $newURL = "bg";
                            header('Location: '.$newURL);
                        break;
                        case 'ES':
                            $newURL = "es";
                            header('Location: '.$newURL);
                        break; 
                        case 'change':
                            $_SESSION['idioma'] = array();
                        unset($_SESSION['idioma']);
                        break; 
                    default:
                        $_SESSION['idioma'] = array();
                        unset($_SESSION['idioma']);                
                    } 
                }        
            ?>
            <div>
                <footer>
                    <div><table><tr><td>© 2021</td></tr></table></div>
                </footer>
            </div>
        </div>
    </body>
</html>