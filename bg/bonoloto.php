<?php
    session_start();
    $typeloto = $_SESSION['typeloto'];
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
<!DOCTYPE html>
<html lang="bg">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <meta http-equiv="refresh" content="25; url=">
        <title>Лотария - Бонолото</title>
    </head>
    <body>
        <div class='content'>
            <h1>Лотария - Бонолото</h1>
            <nav class="menu">
                <form action='index.php' method='post'>
                    <table>
                        <tr>
                            <td><button type='submit' name='typeloto' value=''>Начало</button></a></td>
                            <td><button type='submit' name='typeloto' value='bonoloto'>Бонолото</button></a></td>
                            <td><button type='submit' name='typeloto' value='euromillones'>Евромилиони</button></a></td>
                            <td><button type='submit' name='typeloto' value='primitiva'>Примитива</button></a></td>
                        </tr>
                    </table>
                </form>
            </nav>
            <hr>
            <?php      
                # Números          
                $combinacion = array();
                for ($i=0; $i<6; $i++) {
                    do {
                        $dado = rand(1,50);
                    } while (in_array($dado, $combinacion)); 
                    $combinacion[$i] = $dado;
                }
                #Mostrar tabla
                echo "<p>**Комбинацията се сменя на всеки 25 секунди**</p><br/>";
                echo "<table class='loto'>";
                    foreach ($combinacion as $pos=>$num) {
                        $colspanpos = $pos + 1;
                    }
                    echo "<tr><td colspan=".$colspanpos.">Печеливши числа:</td></tr>";
                    echo "<tr>";
                    foreach ($combinacion as $pos=>$num) {
                        $posicion = $pos + 1;
                        echo "<th>Позиция ($posicion)</th>";
                    }
                    echo "</tr>";
                    echo "<tr>";
                    foreach ($combinacion as $pos=>$num) {
                        echo "<td>$num</td>";
                    }
                    echo "</tr>";
                echo "</table>";
                echo "<br/>";   
                echo "<br/>";
                echo "</table>";
            ?>
            <hr/>
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
    </body>
</html>