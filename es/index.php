<?php
    session_start();
    if (isset($_REQUEST['idioma'])) {
        $idioma = $_REQUEST['idioma'];
        $_SESSION['idioma'] = $idioma;
        switch ($_SESSION['idioma']) {
            case 'BG':
                $newURL = "../bg";
                header('Location: '.$newURL);
            break;
            case 'ES':
                $newURL = "";
                header('Location: '.$newURL);
            break; 
            case 'change':
                $_SESSION['idioma'] = array();
                unset($_SESSION['idioma']);
                $newURL = "../";
                header('Location: '.$newURL);
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
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Lotería - Elige</title>
    </head>
    <body>
        <div class='content'>
            <h1>¿Qué lotería vas a jugar?</h1>
            <?php
                if (isset($_REQUEST['typeloto'])) {
                    $typeloto = $_REQUEST['typeloto'];
                    $_SESSION['typeloto'] = $typeloto;
                    switch ($_SESSION['typeloto']) {
                        case 'bonoloto':
                            $newURL = "bonoloto.php";
                            header('Location: '.$newURL);
                        break;
                        case 'euromillones':
                            $newURL = "euromillones.php";
                            header('Location: '.$newURL);
                        break; 
                        case 'primitiva':
                            $newURL = "primitiva.php";
                            header('Location: '.$newURL);
                        break; 
                    default:
                        $_SESSION['typeloto'] = array();
                        unset($_SESSION['typeloto']);                
                    } 
                }
            ?>
            <nav class="menu">
                <form action='index.php' method='post'>
                    <table>
                        <tr>
                            <td><button type='submit' name='typeloto' value='bonoloto'>Bonoloto</button></td>
                            <td><button type='submit' name='typeloto' value='euromillones'>Euromillones</button></td>
                            <td><button type='submit' name='typeloto' value='primitiva'>La Primitiva</button></td>
                        </tr>
                    </table> 
                </form>
            </nav>
            <hr>
            <img class='center' src="../img/National-lottery.jpg" alt="logo">
            <hr/>
            <div>
                <div><table><tr><td>© 2021</td></tr></table></div>
                <div>
                    <form action='index.php' method='post'>
                        <table class='language'>
                            <tr>
                                <td>Idiomas:</td>
                                <td><button type="submit" name='idioma' value='BG'>Бългърски</button></td>
                                <td><button type="submit" name='idioma' value='ES'>Español</button></td>
                                <td><button type="submit" name='idioma' value='change'>Cambiar idioma</button></td>
                            </tr>
                        </table> 
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>