<?php
    session_start();
    if (isset($_REQUEST['idioma'])) {
        $idioma = $_REQUEST['idioma'];
        $_SESSION['idioma'] = $idioma;
        switch ($_SESSION['idioma']) {
            case 'BG':
                $newURL = "";
                header('Location: '.$newURL);
            break;
            case 'ES':
                $newURL = "../es";
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
        <title>Лотария - Избери</title>
    </head>
    <body>
        <div class='content'>
            <h1>Избери каква лотария ще играеш</h1>           
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
                            <td><button type='submit' name='typeloto' value='bonoloto'>Бонолото</button></a></td>
                            <td><button type='submit' name='typeloto' value='euromillones'>Евромилиони</button></a></td>
                            <td><button type='submit' name='typeloto' value='primitiva'>Примитива</button></a></td>
                        </tr>
                    </table>
                </form>
            </nav>
            <hr>
            <img class='center' src="../img/National-lottery.jpg" alt="logo">
            <hr/>
            <div>
                <footer>
                    <div><table><tr><td>© 2021</td></tr></table></div>
                    <div>
                        <form action='index.php' method='post'>
                            <table class='language'>
                                <tr><td>Езици:</td></tr>
                                <tr>
                                    <td><button type="submit" name='idioma' value='BG'>Бългърски</button></td>
                                    <td><button type="submit" name='idioma' value='ES'>Español</button></td>
                                    <td><button type="submit" name='idioma' value='change'>Смени езика</button></td>
                                </tr>
                            </table> 
                        </form>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>